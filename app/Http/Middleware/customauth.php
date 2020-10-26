<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class customauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       $path=$request->path();
       $user= User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match.']
                ], 404);
            }

             $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];

           // print_r($user);
             return response($response, 201);
        /*
        if(($path=="userlogin" || $path=="register") && $request->session()->has('user'))
        {
            return redirect('/home');
        }
        elseif(($path !="userlogin" || $path !="register") && !($request->session()->has('user')))
        {
            return redirect('userlogin');
        }*/
       /* if (Auth::check())
        {
            return redirect('/home');
        }
        else
        {

          //return redirect('/userlogin');
           return $next($request);
        }*/

          return $next($request);
    }
}
