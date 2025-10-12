<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         if (Auth::user()->role) {

             //$posts = Post::latest()->paginate(4);
             $posts = Post::where([
                ['title', '!=', NULL],
                [function($query) use ($request){
                    if(($term = $request->term)){
                        $query->orWhere('title', 'LIKE', '%'.$term.'%')->get();
                    }
                }]
             ])->orderBy('id', 'desc')
             ->paginate(5);
             return view('posts.index', compact('posts'))
             ->with('i', (request()->input('page', 1)- 1)* 5);

        }

        $posts = Post::where([
            ['title', '!=', NULL],
            ['user_id','=', Auth::user()->id],
            [function($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('title', 'LIKE', '%'.$term.'%')->get();
                }
            }]
         ])->orderBy('id', 'desc')
         ->paginate(5);
         return view('posts.index', compact('posts'))
         ->with('i', (request()->input('page', 1)- 1)* 5);

        //  $posts = Post::where('user_id',Auth::user()->id)->paginate(4);
        //  return view('posts.index', compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $category = Category::all();
        // if($category->count() == 0){

        //     return redirect()->back()->with('error', 'You can not create a Post without categories!');
        // }

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required',
            'event_date' => 'required_if:category,Events',
        ]);


        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/posts/', $image_new_name);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'event_date' => $request->event_date,
            'user_id' => Auth::user()->id,
            'slug' => str_slug($request->title),
            'image' => 'uploads/posts/'.$image_new_name,
        ]);

        return redirect()->route('posts')->with('status', 'New post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Post::find($id);
        return view('posts.edit', compact('posts'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);
        $posts = Post::find($id);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/posts/',$image_new_name);

            $posts->image = 'uploads/posts/'.$image_new_name;
        }

        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->category = $request->category;
        $posts->event_date = $request->event_date;

        $posts->save();

        return redirect()->back()->with('status', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $posts = Post::find($id);

        $posts->delete();

        return redirect()->route('posts')->with('status', 'Post trashed');

    }
    // Trashed posts
    public function trash(){

        $posts = Post::onlyTrashed()->get();

        return view('posts.trashed', compact('posts'));
    }
    // permanantly delete posts
    public function delete($id){
 

        $post = Post::onlyTrashed()->where('id', $id)->first();

        $post->forceDelete();

        return redirect()->back()->with('status', 'Post deleted permanently!');
     }
    // restore deleted posts
    public function restore($id){

        $post = Post::onlyTrashed()->where('id', $id)->first();

        $post->restore();

        return redirect()->back()->with('status', 'Post restored');
    }
}
