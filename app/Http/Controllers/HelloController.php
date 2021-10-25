<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $date = ['msg'=>'これはBladeを利用したサンプルです。',
        ];
        
        return view('hello.index', $date);
    }
}
