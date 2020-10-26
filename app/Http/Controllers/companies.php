<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
class companies extends Controller
{
    //
    function index()
    {
        return company::all();
    }
}
