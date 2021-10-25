<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        $date = ['msg'=>'これはコントローラから渡されたメッセージです。',
            'id'=>$request->id
        ];
        
        return view('hello.index', $date);
    }
}
