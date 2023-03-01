<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\homeContro;
use App\http\controllers\ContactsController;
use App\http\controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\http\controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('/addtt', function () {
    return view('addtt');
});

Route::get('/report', [AdminController::class, 'show_mk']);

Route::get('user', function () {
    return view('user');
});

Route::get('/complaint/{id}', function () {
    return view('complaintadder');
});

Route::get('/addstud', function () {
    return view('addstud');
});

Route::get('/addannform', function () {
    return view('addann');
});

Route::get('/addatt', [AdminController::class, 'add_att']);

Route::resource('/contacts', ContactsController::class);

Route::get('/allatt', [AdminController::class, 'all_att']);
Route::post('/allattwdata', [AdminController::class, 'all_att_data']);

Route::post('/add_stud', [AdminController::class, 'store']);

Route::get('/complaints', [AdminController::class, 'showcomplaint']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/addmk', [AdminController::class, 'add_mk']);
Route::post('/store_complaint', [AdminController::class, 'store_complaint']);

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/alltt', [AdminController::class, 'show_tt']);
Route::get('/allmk', [AdminController::class, 'show_mk']);
Route::get('/contacted', [ContactsController::class, 'show']);

Route::get('/showann', [AdminController::class, 'showann']);

Route::post('/store_att', [AdminController::class, 'store_att']);
Route::post('/addann', [AdminController::class, 'store_ann']);


Route::get('/edit/{id}', [AdminController::class, 'editshow']);
Route::post('/edit/{id}', [AdminController::class, 'editdata']);
Route::get('/changeshow/{id}', [AdminController::class, 'changeshow']);
Route::post('/changestatusnow/{id}', [AdminController::class, 'changestatusnow']);


Route::post('/store_tt', [AdminController::class, 'store_tt']);
Route::post('/store_mk', [AdminController::class, 'store_mk']);
Route::get('/edittt/{id}', [AdminController::class, 'editshowtt']);
Route::get('/editmk/{id}', [AdminController::class, 'editshowmk']);
Route::post('/edittt/{id}', [AdminController::class, 'editdatatt']);
Route::post('/editdata_mk/{id}', [AdminController::class, 'editdata_mk']);

Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::get('/deletett/{id}', [AdminController::class, 'deletett']);
Route::get('/deletemk/{id}', [AdminController::class, 'deletemk']);
Route::get('/deleteatt/{date}', [AdminController::class, 'deleteatt']);

Route::get('/downloadreport/{id}', [AdminController::class, 'downloadreport']);

Route::get('contactus', function () {
    return view('contactus');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [homeContro::class, 'checkUser'])
    ->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
