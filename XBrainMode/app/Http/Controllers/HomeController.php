<?php

namespace App\Http\Controllers;

use App\Models\games;
use App\Models\images;
use App\Models\User as ModelsUser;
use App\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
    public function index()
    {
        return view('home');
    }

    public function catalog()
    {
        $games= games::all();
        $img= images::all();
        return view('catalog')->with('games',$games)->with('imag',$img);
    }

    public function register($id)
    {
        return view('register')->with('id',$id);
    }

    public function saveUsr(Request $request)
    {
        $usur=new User();

        $usur->name=$request->name;
        $usur->email=$request->email;
        $usur->idRol=$request->idRol;
        $usur->password=bcrypt($request->password);

        $usur->save();

        return view('/home')->with('success','Account created with success!');
    }
}
