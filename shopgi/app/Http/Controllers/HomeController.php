<?php

namespace App\Http\Controllers;
use App\Models\products;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products=Products::take(8)->get();
        return view('home',[
            'products'=>$products
        ]);
        
    }

}