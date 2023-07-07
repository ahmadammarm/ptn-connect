<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/register', function () {
// //     return view('register');
// // });

// // Route::get('/login', function () {
// //     return view('login');
// // });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/isi', function () {
//     return view('isi');
// });

// Route::get('/hasil', function () {
//     return view('hasil');
// });

// Route::get('/profil', function () {
//     return view('profil');
// });

// Route::get('/register',[RegisterController::class,'register'])
//         ->name('register');
// Route::get('/user',[RegisterController::class,'store'])
//         ->name('store');
// Route::get('/login',[LoginController::class,'login'])
//         ->name('login');
// Route::get('/user',[LoginController::class,'store'])
//         ->name('store');
// Auth::routes();
// // Route::get('/logout', function () {
// //         return view('login');
// //     });

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KMeansController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
});

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/home', function () {
    return view('home');
});

// Route::get('/isi', function () {
//     return view('isi');
// });

// Route::get('/hasil', function () {
//     return view('hasil');
// });

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/edit', function () {
    return view('edit');
});

// Route::get('/register', [RegisterController::class, 'register'])
//     ->name('register');
Route::get('/user', [RegisterController::class, 'store'])
    ->name('store');
// Route::get('/login', [LoginController::class, 'login'])
//     ->name('login');
// Route::get('/store2', [LoginController::class, 'store2'])
// // //     ->name('store2');
// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});
// Route::get('/home', [DashboardController::class, 'store'])
//     ->name('home');
Route::get('/isi', function () {
    return view('isi');
});

// Route::get('/hasil', function () {
//  return view('hasil');
// });

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/data/create', [DataController::class, 'create'])
    ->name('data.create');
Route::get('/data/{data}', [DataController::class, 'show'])
    ->name('data.show');
Route::get('/data/{data}/edit', [DataController::class, 'edit'])
    ->name('data.edit');
Route::patch('/data/{data}', [DataController::class, 'update'])
    ->name('data.update');

Route::get('/hasil/{data}', [DataController::class, 'show'])
    ->name('data.show');
Route::get('/hasil/{data}', [KMeansController::class, 'show'])->name('show');

// Route::get('/hasil', [KMeansController::class, 'hasil'])->name('hasil.store');
Route::resource('CRUD', DataController::class)->scoped();
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/data', [DataController::class, 'store'])
    ->name('data.store');
Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/data/create', [DataController::class, 'create'])
    ->name('data.create');
Route::get('/hasil', [DataController::class, 'index'])
    ->name('hasil');
Route::get('/hasil/{data}', [DataController::class, 'show'])
    ->name('data.show');
Route::get('/data/{data}/edit', [DataController::class, 'edit'])
    ->name('data.edit');
Route::patch('/data/{data}', [DataController::class, 'update'])
    ->name('data.update');
Route::post('/data', [DataController::class, 'store'])
    ->name('data.store');

Route::get('/kmeans', [KMeansController::class, 'kMeans'])->name('kMeans');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
