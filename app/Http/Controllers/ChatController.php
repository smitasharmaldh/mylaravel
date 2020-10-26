<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Environment\Console;
use App\Models\Message;
use App\Events\MessageSent;

class ChatController extends Controller
{
    //
    private $data;


    public function register(Request $req) {
        $user=new User;
        $user->name=$req->input('name');
        $user->email=$req->input('username');

       $user->password=Hash::make($req->input('password'));
        $user->save();
        $req->session()->flash('status','submission successfull');
        return redirect('chatlogin');
    }
    function userloginchk(Request $req)
    {

    $usr= User::where("email",$req->input('username'))->get();

       if (Hash::check($req->input('password'),$usr[0]->password)) {
            //$user = Auth::user();

            $req->session()->put('user',$usr[0]->name);
            $req->session()->flash('status','submission successfull');
            $this->data=$usr[0]->id;
            User::where('id',$this->data)->update(['loginstatus' =>'1']);
           // $usr= User::where('id','!=', $this->data)->get();

            $usr= User::where('id','!=', $this->data)->where('loginstatus','1')->get();

           // return view('chatindex',['usr'=>$usr]);
            return redirect('chatsindex');
        }

        else{
            $req->session()->flash('status','Credentials does not match. Try Again!!!');
            return redirect('chatlogin');
        }


    }
    function userlogout(Request $req)
    {
        $usr= User::where("email",$req->input('username'))->get();
        $req->session()->forget('user');
        User::where('id',$this->data)->update(['loginstatus' =>'0']);
       $req->session()->flash('status','You are logged Out');
        return redirect('chatlogin');
    }
    public function chatfriends($frnd){
        $usr= User::where('id','!=', $this->data)->where('loginstatus','1')->get();
        $fnd= User::where('id', $frnd)->get();




       return view('chatpage',['fnd'=>$fnd]);

     }






   /* private function checkIfUserExist($username) {
        $user = User::where('username', $username)->first();

        if ($user) {
            return $user;
        } else {
            return false;
        }
}*/
}
