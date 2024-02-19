<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoomController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/n_allroom', function () {
    return view('n_allroom');
});

// user ดูห้องพัก
Route::get('/y_allroom',[RoomController::class,'index']);

Route::get('/roomlist', function () {
    return view('roomlist');
});

Route::get('/n2_allroom', function () {
    return view('n2_allroom');
});

Route::get('/n3_allroom', function () {
    return view('n3_allroom');
});

Route::get('/y_view_dt', function () {
    return view('y_view_dt');
});

Route::get('/again_dt', function () {
    return view('again_dt');
});






// admin
Route::prefix('/admin')->group(function () {
    // หน้า Login
    Route::get('/login', function () {
        return view('admin/login');
    });
    // หน้าหลัก
    Route::get('/index', function () {
        return view('admin/index');
    });

    Route::get('/user', function () {
        return view('admin/user');
    });

    Route::get('/layout-static',[AdminController::class,'index']);

    Route::get('/layout-edit-static',[AdminController::class,'edit']);

    Route::get('/charts', function () {
        return view('admin/charts');
    });
    
    Route::get('tables', function () {    
        return view('admin/tables');
    });

    Route::get('register', function () {   
        return view('admin/register');
    });
    
});

Route::post('/create', [AdminController::class, 'create']);
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('editview/{id}',[AdminController::class,'findone'])->name('editview');
Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');

Auth::routes();

// หน้า user
Route::get('/y_welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// หน้า admin
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');