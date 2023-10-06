<?php

use App\Models\cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/project1','project1');

Route::view('/project2','project2');




Route::view('/cars','cars');

Route::post('/car', function(Request $request)
{
     Cars::create([
        'name' => $request->name,
        'price' => $request->price,
    ]);
    return 'Проверь!';
});
