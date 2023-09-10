<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
class HomeController extends Controller
{
    public function home()
    {
        $houses = House::where('active',1)->limit(4)->orderby('id','asc')->get();
        return view('home',compact('houses'));
    }
}
