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

Route::get('/input',function (){
    return view('input');
});

Route::post('/input',function (\Illuminate\Http\Request $request){
    $name = $request->name;
    $price = $request->price;
    $discount =$request->price + ( $request->discount * $request->price * 0.01 );
    return view('output',compact(['name','price','discount']));
});
