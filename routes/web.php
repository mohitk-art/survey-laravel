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
    return view('home');
});

Route::get('/companylogin', function () {
    return view('companylogin');
});

Route::get('/employeelogin', function () {
    return view('employeelogin');
});

Route::get('/alldone', function () {
    return view('alldone');
});

Route::get('/companyregister', function () {
    return view('companyregister');
});

Route::get('/emailregisteration', function () {
    return view('emailregisteration');
});

Route::get('/failed', function () {
    return view('failed');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/question1', function () {
    return view('question1');
});

Route::get('/question2', function () {
    return view('question2');
});

Route::get('/question3', function () {
    return view('question3');
});

Route::get('/question4', function () {
    return view('question4');
});

Route::get('/question5', function () {
    return view('question5');
});

Route::get('/question6', function () {
    return view('question6');
});