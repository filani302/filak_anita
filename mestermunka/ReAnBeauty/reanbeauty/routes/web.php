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
use App\Http\Controllers\LikeController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ProductsFilterController;
use App\Http\Controllers\RutinFilterController;
use App\Http\Controllers\CommentProductController;
use App\Http\Controllers\CommentRutinController;



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

Route::get('/TudjmegTobbet', function () {
    return view('TudjmegTobbet');
});
 
Route::get('/kedvencek', function () {
    return view('kedvencek');
});
Route::get('/adminfelulet', function () {
    return view('adminfelulet');
});
Route::get('/adminfeluletBejelentkezes', function () {
    return view('adminfeluletBejelentkezes');
});




 
Route::get('/registration', [UserController::class, 'create'])->name('registration');
Route::post('/registration', [UserController::class, 'store'])->name('registration.store');
Route::post('/register', [UserController::class, 'register']);
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
//Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




Route::post('/termekfeltoltesek', [ProductFormController::class, 'store'])->name('product.store');


Route::post('/rutinfeltoltesek', [RutinFormController::class, 'store'])->name('rutin.store');


Route::get('/profil', [ProfilController::class, 'showProfile'])->middleware('auth');
Route::put('/profil/update', [ProfilController::class, 'updateProfile'])->name('profil.update');
Route::post('/profil/logout', [ProfilController::class, 'logout'])->name('logout');

Route::get('/termekek', [ProductFormController::class, 'index']);

Route::get('/rutinok', [RutinFormController::class, 'index']);




Route::post('/like', [LikeController::class, 'toggleLike'])->name('like.toggle')->middleware('auth');



Route::post('/kedvencek', [FavouriteController::class, 'store'])->name('favourites.store');
Route::get('/kedvencek', [FavouriteController::class, 'index']);

Route::get('/termekek', [ProductsFilterController::class, 'index'])->name('products.index');
Route::get('/rutinok', [RutinFilterController::class, 'index'])->name('rutins.index');



// Termék komment route-ok
Route::get('/kommentektermek/{product}', [CommentProductController::class, 'show'])->name('kommentektermek.show');
Route::post('/comments/product', [CommentProductController::class, 'store'])->name('comments.product.store');

// Rutin komment route-ok
Route::get('/kommentekrutin/{rutin}', [CommentRutinController::class, 'show'])->name('kommentekrutin.show');
Route::post('/comments/rutin', [CommentRutinController::class, 'store'])->name('comments.rutin.store');









