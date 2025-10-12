<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;
use Auth;

class OperationsController extends Controller
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

            $operations = Operation::where([
                ['name', '!=', NULL],
                ['status', '=', 1],
                [function($query) use ($request){
                    if(($term = $request->term)){
                        $query->orWhere('name', 'LIKE', '%'.$term.'%')->get();
                    }
                }]
             ])->orderBy('id', 'desc')
             ->paginate(5);
             return view('operations.index', compact('operations'))
             ->with('i', (request()->input('page', 1)- 1)* 5);

            // $operations = Operation::orderBy('created_at','desc')->where('status', 1)->paginate(3);
            // return view('operations.index', compact('operations'));
        }
        $operations = Operation::where([
            ['name', '!=', NULL],
            ['status', '=', 1],
            ['user_id', '=', Auth::user()->id],
            [function($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('name', 'LIKE', '%'.$term.'%')->get();
                }
            }]
         ])->orderBy('id', 'desc')
         ->paginate(5);
         return view('operations.index', compact('operations'))
         ->with('i', (request()->input('page', 1)- 1)* 5);

        // $operations = Operation::where('user_id',Auth::user()->id)
        // ->where('status', 1)->paginate(3);
        // return view('operations.index', compact('operations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('operations.create');
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'operation_type' => 'required'
        ]);

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/operations/',$image_new_name);

        Operation::create([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'image' => 'uploads/operations/'.$image_new_name,
            'operation_type' => $request->operation_type,
        ]);

        return redirect()->route('operations')->with('status', 'New operation added!');
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
        $operation = Operation::find($id);

        return view('operations.edit', compact('operation'));
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
            'name' => 'required',
            'description' => 'required',
            'operation_type' => 'required'
        ]);

        $operation = Operation::find($id);

        if($request->hasFile('image')){

            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/operations/', $image_new_name);

            $operation->image = 'uploads/operations/'.$image_new_name;

        }

        $operation->name = $request->name;
        $operation->description = $request->description;
        $operation->operation_type = $request->operation_type;

        $operation->save();

        return redirect()->back()->with('status', 'Operation has been updated!');


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
        $operation = Operation::find($id);

        $operation->delete();

        return redirect()->back()->with('status', 'Operation has been deleted!');

    }

    public function deactivated(){

        $operations = Operation::where('status', 0)->paginate(5);

        return view('operations.deactivated', compact('operations'));
    }

    public function deactivate($id){

        $operation = Operation::find($id);

        $operation->status = 0;

        $operation->save();

        return redirect()->back()->with('status', 'The operation is no longer active!');
    }

    public function activate($id){

        $operation = Operation::find($id);

        $operation->status = 1;

        $operation->save();

        return redirect()->back()->with('status', 'The operation is now active');
    }


}
