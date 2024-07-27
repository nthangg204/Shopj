<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\categories;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function  menu(){
        $products=Products::take(20)->get();
        return view(' menu');
    }
   
}
