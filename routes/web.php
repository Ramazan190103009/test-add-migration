<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Clients;
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

Route::get('/user', function () {
    return view('user');
});

Route::get('/client/add', function(){
   DB::table('clients')->insert([
       'name'=>'Ramazan',
       'surname'=>'Yertayev',
       'age'=>'18'
   ]);
});

Route::get('/client', function(){
    $client=Clients::find(1);
    return $client->surname;
});