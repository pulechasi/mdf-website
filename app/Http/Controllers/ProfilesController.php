<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Auth;
class ProfilesController extends Controller
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
    public function index()
    {
        //
        return view('users.profile')->with('user', Auth::user())
        ->with('profile', Profile::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile; // Load the profile relationship

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8', // Add validation rules for password
            'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules for an image
            'about' => 'required',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->has('password')) {
            $newPassword = $request->input('password');
            if (!empty($newPassword)) {
                $user->password = bcrypt($newPassword);
            }
        }
        $user->update();
        $profile->about = $request->input('about');
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $picturePath = $picture->store('uploads/profile', 'public');
            $profile->picture = $picturePath;
        }
        $profile->update();

        return redirect()->back()->with('status', 'User profile updated!');
    }






}