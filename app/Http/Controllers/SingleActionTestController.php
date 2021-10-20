<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionTestController extends Controller
{
    //シングルアクションコントローラーのテスト
    public function __invoke() {
        return <<<EOF
        
        <html>
            <head>
                <title>SingleAction</title>
                <style>
                    body {font-size:16pt; color:#999}
                    h1 {font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
                </style>
            </head>
            <body>
                <h1>Index</h1>
                <p>これは、SingleActionコントローラーのアクションです。</p>
            </body>
        </html>
        EOF;
    }
}
