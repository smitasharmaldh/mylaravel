<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //
   /* protected $redirectTo = '/authview';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }*/
    public function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

             $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];
            print_r($user);
             return response($response, 201);

      /*   if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
       $usr = Auth::user();
        if ( Auth::guard('web')->check()) {
            return redirect('test');
        }
        else
        {
        return view('/authview',['usr'=>$usr]);
        }
        return Auth::attempt(
            $this->credentials($request), $request->filled('remember')
        );*/

    }
    public function login(Request $request)
    {
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
            print_r($user);
             return response($response, 201);
    }

}
