<?php

namespace App\Http\Controllers;

use Illuminate\http\request;

class WelcomeController extends Controller 
{ 
    public function hello(){ 
        return('Hello World'); 
    } 
 
    public function greeting(){ 
        return view('blog.hello') 
            ->with('name','IRELL') 
            ->with('occupation','Astronaut'); 
    }
}