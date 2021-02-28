<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index($id){
        return view('news', ['nama' => $id]);            
    }

    public function about(){
        return view('about-us');            
    }
}
