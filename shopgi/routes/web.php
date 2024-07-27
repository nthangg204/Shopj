<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/booking', [BookingController::class, 'booking'])->name('booking');

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear.cart');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('update.cart');
    
// Route::post('add', [CartController::class, 'add'])->name('add');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::get('/signup', [UsersController::class, 'signup'])->name('signup');
Route::get('/login', [UsersController::class,'login'] )->name('login');
Route::get('/signup', [UsersController::class,'signup'] );
Route::post('/signup', [UsersController::class,'postregister'] );
Route::post('/login', [UsersController::class,'postlogin'] );
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');


Route::get('/productadmin', [ProductAdminController::class, 'productadmin'])->name('productadmin');
Route::post('/productadd', [ProductAdminController::class, 'productadd'])->name('productadd');
Route::get('/productupdateform/{id}', [ProductAdminController::class, 'productupdateform'])->name('productupdateform');
Route::post('/productupdate', [ProductAdminController::class, 'update'])->name('productupdate');
Route::get('/productdelete/{id}', [ProductAdminController::class, 'productdelete'])->name('productdelete');
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');



Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/users', [UsersController::class, 'users'])->name('users');
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');
Route::get('/menu', [ProController::class, 'menu'])->name('menu');
Route::get('/menu/{category_id}', [ProController::class, 'getproductsbyCategory'])->name('categories');
Route::get('/search', [ProController::class, 'search'])->name('search');
Route::get('/menu/detail/{product_id}', [ProController::class, 'detail'])->name('detail');
    

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/product', 'ProductController@list')->name('product');
// Route::get('/product/{id}', 'ProductController@list')->name('chitiet');