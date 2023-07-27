<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        $user = Auth::user();
        $test = $user->id;
        $status = Pendaftaran::where('users_id', $test)->get();
        $status1 = Pendaftaran::where('users_id', $test)->count();
        $status2 = Pendaftaran::count();

        return view('home', compact('user', 'status','status1','status2'));
    }
}
