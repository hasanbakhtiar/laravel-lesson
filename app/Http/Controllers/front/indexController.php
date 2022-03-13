<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data = ['name'=>'Hasan','surname' => 'Bakhtiar',"info"=>["age"=>'24','job'=>'Full Stack']];
        // return view('index',$data);
        return view('index',['age'=>15]);

    }
}
