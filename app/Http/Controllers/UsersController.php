<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
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
         $users = User::where([
            ['name', '!=', NULL],
            [function($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('name', 'LIKE', '%'.$term.'%')->get();
                }
            }]
         ])->orderBy('id', 'desc')
         ->paginate(5);
         return view('users.index', compact('users'))
         ->with('i', (request()->input('page', 1)- 1)* 5);
        // $users = User::paginate(3);
        // return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
            'email'=> 'required|email'
        ]);

        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('12345678'),
        ]);

        Profile::create([
            'picture' => 'profile.png',
            'user_id' => $user->id,
        ]);

        return redirect()->route('users')->with('status', 'New user created!');
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
        $user = User::find($id);

        $user->delete();

        $user->profile->delete();

        return redirect()->route('users')->with('status', 'User deleted!');
    }

    public function removeAdmin($id){
        $user = User::find($id);

        $user->role = 0;
        $user->save();

        return redirect()->route('users')->with('status', 'User is now an author!');
    }
    public function makeAdmin($id){
        $user = User::find($id);

        $user->role = 1;
        $user->save();

        return redirect()->route('users')->with('status', 'User is now an Admin!');
    }
}
