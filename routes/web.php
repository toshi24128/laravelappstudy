<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
Route::get('hello/{msg?}', function ($msg='no message.') {
    $html = <<<EOF
    <html><body><h1>hello</h1><p>This is sample page.{$msg}</p></body></html>
    EOF;
    return $html;
});
*/
// Route::get('/hello/{id?}/{pass?}','App\Http\Controllers\HelloController@index');
Route::get('singleActionTest', 'App\Http\Controllers\SingleActionTestController');
Route::get('requestAndResponse', 'App\Http\Controllers\RequestAndResponseController@index');


Route::get('hello', function(){
    return view('hello.index');
});