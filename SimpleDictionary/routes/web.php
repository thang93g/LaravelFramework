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
    $arrIn = ['mot','hai','ba','bon','nam','sau','bay','tam','chin','muoi'];
    $arrOut = ['one','two','three','four','five','six','seven','eight','nine','ten'];
    $key = array_search($request->search,$arrIn);
    $output = $arrOut[$key];
    return view('output',compact(['output']));
});
