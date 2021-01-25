<?php

use App\Models\Product;
use App\Models\Category;
// use App\Models\SettingSite;
// use App\Models\AboutHome;
// use App\Models\OrderToPay;


//use Artisan;

namespace App\Http\Controllers;

//use App\Models\Product;
use App\Product;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewApp1()
    {
        return view('layouts.app');
    }
    public function viewApp2()
    {
        return view('layouts.app2');
    }
    public function viewIndex()
    {
        $data['products']=Product::  paginate (10);
       
        return view('showProduct')->with($data);
    }
    
    public function viewAdmin()
    {
        
        if (! (auth()->user()->type == "admin")) {
            abort(401, 'This action is unauthorized.');
        }
        return view('admin.admin');
    }
    

    public function GetProduct(Request $request)
    {
        $products=Product::all();
        return response()->json($products);
    }


}