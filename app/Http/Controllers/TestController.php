<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show(){
        return "<h1> Helo_World </h1> ";
    }

    public function pageshow(string $id){

        return view('controller',compact('id'));
    }

}
