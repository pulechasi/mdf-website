<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('user_dashboard');
    }

    public function adminHome()
    {

        $postsCount = Post::all()->count();
        $usersCount = User::all()->count();
        $operationsCount = Operation::all()->count();
        return view('admin_dashboard', compact('postsCount', 'usersCount', 'operationsCount'));
    }
}
