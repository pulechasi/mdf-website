<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Advert;

class AdvertsController extends Controller
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
        if(Auth::user()->role){
            $adverts = Advert::where([
                ['title', '!=', NULL],
                ['status', '=', 1],
                [function($query) use ($request){
                    if(($term = $request->term)){
                        $query->orWhere('title', 'LIKE', '%'.$term.'%')->get();
                    }
                }]
             ])->orderBy('id', 'desc')
             ->paginate(5);
             return view('adverts.index', compact('adverts'))
             ->with('i', (request()->input('page', 1)- 1)* 5);

        }
         $adverts = Advert::where([
            ['title', '!=', NULL],
            ['status', '=', 1],
            ['user_id', '=', Auth::user()->id],
            [function($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('title', 'LIKE', '%'.$term.'%')->get();
                }
            }]
         ])->orderBy('id', 'desc')
         ->paginate(5);
         return view('adverts.index', compact('adverts'))
         ->with('i', (request()->input('page', 1)- 1)* 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adverts.create');
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
            'description' => 'required',
            'file' => 'required|mimes:pdf|12288',
            'advert_type' => 'required',
            'due_date' => 'required',
        ]);

        $file = $request->file;
        $file_new_name = time().$file->getClientOriginalName();
        $file->move('uploads/adverts/', $file_new_name);

        Advert::create([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'user_id' => Auth::user()->id,
            'description' => $request->description,
            'file' => 'uploads/adverts/'.$file_new_name,
            'advert_type' => $request->advert_type,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('adverts')->with('status', 'New advert added!');
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
        $advert = Advert::find($id);

        return view('adverts.edit', compact('advert'));
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
           'description' => 'required',
           'advert_type' => 'required',
           'due_date'  => 'required',
        ]);

        $advert = Advert::find($id);

        if($request->hasFile('file')){
            $file = $request->file;
            $file_new_name = time().$file->getClientOriginalName();
            $file->move('uploads/adverts/', $file_new_name);

            $advert->file = 'uploads/adverts/'.$file_new_name;
        }

        $advert->title = $request->title;
        $advert->description = $request->description;
        $advert->advert_type = $request->advert_type;
        $advert->due_date = $request->due_date;

        $advert->save();

        return redirect()->back()->with('status', 'Advert has been updated!');

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
        $advert = Advert::find($id);

        $advert->delete();

        return redirect()->route('adverts')->with('status', 'Advert has been deleted!');
    }

    public function unpublished(){
        $adverts = Advert::latest()->where('status',0)->paginate(5);
        return view('adverts.upublished', compact('adverts'));
    }

    public function publish($id){
        $advert = Advert::find($id);
        $advert->status = 1;

        $advert->save();

        return redirect()->back()->with('status', 'The advert has been published!');

    }

    public function unpublish($id){
         $advert = Advert::find($id);

         $advert->status = 0;
         $advert->save();

         return redirect()->back()->with('status', 'The advert has been unpublished!');

    }
}
