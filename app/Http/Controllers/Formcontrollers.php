<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Formcontrollers extends Controller
{
    //
    public function formsubmit(Request $req)
    {
        $req->session()->flash('data',"Data has been submitted");
        $req->validate([
            "user"=>"required",
            "phone"=>"min:10",
            "password"=>"min:2 | max:5"
        ]);

        return redirect('/fs');

    }
    public function formdata(Request $req)
    {
       $data=DB::select('select * from signin');
       print_r($data);

    }
    public function paginationdata()
    {
       $data=DB::table('companies')->paginate(2);
       return view('paginationview',['data'=>$data]);

    }

    public function fileuploading(Request $req)
    {
        echo $req->file('f1')->store('uploads');

    }
}
