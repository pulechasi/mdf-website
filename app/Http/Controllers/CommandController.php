<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Command;
use Auth;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $command = Command::latest()->paginate(5);
        return view('commands.index',compact('command'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('commands.create');
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
            'rank' => 'required',
            'name' => 'required',
            'description' => 'required',
            'picture' => 'required|image'
        ]);

        $picture = $request->picture;
        $picture_new_name = time().$picture->getClientOriginalName();
        $picture->move('uploads/command/', $picture_new_name);

        Command::create([
            'rank' => $request->rank,
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'picture' => 'uploads/command/'.$picture_new_name,
        ]);

        return redirect()->route('commands')->with('status', 'New command created!');
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
        $command = Command::find($id);

        return view('commands.edit', compact('command'));
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
            'rank' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $command = Command::find($id);

        if($request->hasFile('picture')){

            $picture = $request->picture;
            $picture_new_name = time().$picture->getClientOriginalName();
            $picture->move('uploads/command/', $picture_new_name);

            $command->picture = 'uploads/command/'.$picture_new_name;

        }

        $command->rank = $request->rank;
        $command->name = $request->name;
        $command->description = $request->description;
        $command->save();

        return redirect()->back()->with('status', 'Command updated!');

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
        $command = Command::find($id);

        $command->delete();

        return redirect()->route('commands')->with('status', 'Command deleted!');

    }
}
