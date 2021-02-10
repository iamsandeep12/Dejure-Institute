<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dejure;

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
    return view('Home');
});
Route::view('Home',[Dejure::class,'Home']);
Route::view('About',[Dejure::class,'About']);
Route::view('Contact',[Dejure::class,'Contact']);
Route::view('Courses',[Dejure::class,'Courses']);
Route::view('Package',[Dejure::class,'Package']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',[Dejure::class,'logout']);
Route::view('AdminDashBoard',[Dejure::class,'AdminDashBoard']);
Route::view('AddNewQuestion',[Dejure::class,'AddNewQuestion']);
Route::post('Add',[Dejure::class,'Add']);
Route::get('questionsList',[Dejure::class,'questionsList']);
Route::get('EditQuestions/{id}',[Dejure::class,'EditQuestions']);
Route::get('deletequestions/{id}',[Dejure::class,'deletequestions']);
Route::post('EditQuestions/{id}',[Dejure::class,'updatequestions']);
Route::post('AddContact',[Dejure::class,'AddContact']);
Route::get('ContactsList',[Dejure::class,'ContactsList']);
Route::get('DeleteEnquiry/{id}',[Dejure::class,'DeleteEnquiry']);
Route::get('startquiz',[Dejure::class,'startquiz']);
Route::post('submitans',[Dejure::class,'submitans']);
Route::post('AddResults',[Dejure::class,'AddResults']);
Route::get('ResultsList',[Dejure::class,'ResultsList']);
