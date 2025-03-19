<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\ProductFormController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RutinFormController;
 
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
 
Route::get('/custom-css', function () {
    $path = public_path('css/app.css');
    if (File::exists($path)) {
        return Response::file($path, ['Content-Type' => 'text/css']);
    } else {
        abort(404);
    }
});
 
Route::get('/welcome', function () {
    return view('welcome');
});
 

Route::get('/', function () {
    return view('fooldal');
});
 
Route::get('/termekek', function () {
    return view('termekek');
});
Route::get('/termekfeltoltesek', function () {
    return view('termekfeltoltesek');
});
 
Route::get('/login', function () {
    return view('login');
});
 
Route::get('/registration', function () {
    return view('registration');
});
 
Route::get('/rutinok', function () {
    return view('rutinok');
});
 
Route::get('/rutinfeltoltesek', function () {
    return view('rutinfeltoltesek');
});
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/elfelejtettem', function () {
    return view('elfelejtettem');
});

Route::get('/TudjmegTobbet', function () {
    return view('TudjmegTobbet');
});
 
Route::get('/kedvencek', function () {
    return view('kedvencek');
});
 
 
Route::get('/registration', [UserController::class, 'create'])->name('registration');
Route::post('/registration', [UserController::class, 'store'])->name('registration.store');
Route::post('/register', [UserController::class, 'register']);
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
//Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




Route::post('/termekfeltoltesek', [ProductFormController::class, 'store'])->name('product.store');
Route::get('/termekekfeltoltesek', [ProductFormController::class, 'index'])->name('termekek');

Route::post('/rutinfeltoltesek', [RutinFormController::class, 'store'])->name('rutin.store');
Route::get('/rutinfeltoltesek', [RutinFormController::class, 'index'])->name('rutinok');

Route::get('/profil', [ProfilController::class, 'showProfile'])->middleware('auth');
Route::put('/profil/update', [ProfilController::class, 'updateProfile'])->name('profil.update');
Route::post('/profil/logout', [ProfilController::class, 'logout'])->name('logout');