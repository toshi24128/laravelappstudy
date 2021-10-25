<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id = 'zero'){
        $date = ['msg'=>'これはコントローラから渡されたメッセージです。',
            'id'=>$id
        ];
        
        return view('hello.index', $date);
    }
}
