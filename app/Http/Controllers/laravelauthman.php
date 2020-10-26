<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class laravelauthman extends Controller
{
    //
    public function authenticate(Request $request)
    {


        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/auth1');
        }
    }
}
