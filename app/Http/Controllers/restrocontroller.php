<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class restrocontroller extends Controller
{
    //
    public function index()
    {
    return view('home');
    }
    public function lists()
    {
    return view('lists');
    }
    public function register()
    {
    return view('register');
    }
    public function userlogin()
    {
    return view('userlogin');
    }
    function registration(Request $req)
    {

       $user=new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');

       $user->password=Hash::make($req->input('password'));
        $user->save();
        $req->session()->flash('status','submission successfull');
        return redirect('lists');
       // return $req->input();
    }
    function userloginchk(Request $req)
    {

        $usr= User::where("email",$req->input('email'))->get();

        if (Hash::check($req->input('password'), $usr[0]->password)) {
            //$user = Auth::user();

            $req->session()->put('user',$usr[0]->name);
            $req->session()->flash('status','submission successfull');
        }
        else
        {
            $req->session()->flash('status','Credentials does not match');
        }
        return redirect('/lists');

    }

    function userlogout(Request $req)
    {
        $req->session()->forget('user');
       // return echo "Session=".;
        return redirect('/userlogin');
    }
}
