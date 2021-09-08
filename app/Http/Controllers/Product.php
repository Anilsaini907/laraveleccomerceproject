<?php

namespace App\Http\Controllers;
use App\productdata;
use DB;
use Illuminate\Http\Request;


class Product extends Controller
{
   function index() {
    $categories =  DB::table('products')->get();
    return view ('product')->with(compact('categories'));
    }
}
