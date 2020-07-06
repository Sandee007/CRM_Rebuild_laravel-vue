<?php

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

// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route; 


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>['auth','admin']],function (){
    Route::get('/home', function () {
        return view('admin.dashboard');
    });

    Route::get('/', function () {
        return view('welcome');
    });


    Route::resource('branch','Branch\BranchController');
    Route::resource('center','Center\CenterController');
    // Route::get('/showBranch','Branch\BranchController@index');
    //  Route::get('/addbranch','Branch\BranchController@create');
    // Route::get('/storebranch','Branch\BranchController@store');
    // Route::get('/addcenter','Center\CenterController@addcenter')
    Route::resource('loan','LoanController');


    //-----------------------------------------------------------------------------------Routs borrower
    Route::resource('borrower','BorrowerController');

    //----------------------------------------------------------------------loans

    
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
