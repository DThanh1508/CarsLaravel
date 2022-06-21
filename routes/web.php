<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use App\Http\Controllers\getptb1;
use App\Http\Controllers\postptb1;
use App\Http\Controllers\caculator;
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
Route::get('cars',[CarController::class,'index'])->name('cars.index');
Route::get('cars/create',[CarController::class,'create'])->name('cars.create');
Route::post('cars/',[CarController::class,'store'])->name('cars.store');
Route::get('cars/{id}/edit',[CarController::class,'edit'])->name('cars.edit');
Route::put('cars/{car}',[CarController::class,'update'])->name('cars.update');
Route::get('cars/{car}',[CarController::class,'show'])->name('cars.show');
// Route::delete('cars/{car}',[CarController::class,'destroy'])->name('cars.destroy');
Route::get('/cars/delete/{car}', [CarController::class, 'destroy'])->name('cars.delete');
// Route::get('ptb1',function(){
//     return view('ptb1');
// });
// Route::get('ptb1_c2',function(){
//     return view('ptb1_c2');
// });
// Route::get('caculator',function(){
//     return view('caculator');
// });
// Route::get('test',function(){
//     return view('test');
// });
// Route::post('ptb1', function (Request $req) {
//     $a = $req->input('a');
//     $b = $req->input('b');
//     if($a==0)
//     if($b==0)
//     $kq = "PT có V số N";
//     else $kq ="PTVN";
//     else $kq ="PTCN x=".round(-$b/$a,2);
//     return view('ptb1',compact('a','b','kq'));
// })->name('ptb1.post');
// Route::post('ptb1',[postptb1::class,'postptb1'])->name('ptb1.post');
// Route::get('ptb1_c2',[getptb1::class,'getptb1'])->name('ptb1.get');
// Route::post('caculator',[caculator::class,'caculator'])->name('caculator.post');
// Route::get('tinh2',function(){
//     return view('tinh2');
// });
// Route::post('tinh2',[tinh::class,'tinhLop1'])->name('xoi');