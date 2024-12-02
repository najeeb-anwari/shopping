<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
// Livewire Components
use App\Http\Livewire\Products\Create;
use App\Http\Livewire\Products\Index;
use App\Http\Livewire\Products\Show;
use App\Http\Livewire\Products\ProductEdit;
use App\Http\Livewire\Components\ShoppingCart;
use App\Http\Livewire\Components\Checkout;
use App\Http\Livewire\Components\Wishes;
use App\Http\Livewire\Orders\OrderList;
use App\Http\Livewire\Orders\OrderDetail;
use App\Http\Livewire\Users\UserList;
use App\Http\Livewire\Users\UserDetail;
use App\Http\Livewire\Users\UserEdit;
use App\Http\Livewire\Pages\HomePage;
use App\Http\Livewire\Products\ProductList;
use App\Http\Livewire\Products\Search;
use App\Http\Livewire\Products\CategoryProducts;


// Models
use App\Models\Role;
use App\Models\Product;

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

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'can:buyer_access'], function() {
        Route::get('shopping/cart', ShoppingCart::class);
        Route::get('shopping/checkout', Checkout::class);
        route::get('wishlist', Wishes::class);
    });
    Route::group(['middleware' => 'can:admin_access' ], function(){
        Route::resource('categories', CategoryController::class);
        Route::get('users', UserList::class);
        Route::get('users/{user}', UserDetail::class);
        Route::get('users/{user}/edit', UserEdit::class);

    });

    // Route::resource('products', ProductController::class);
    Route::get('products/create', Create::class)->can('create', Product::class);
    Route::get('products/{product}/edit', ProductEdit::class);



    Route::get('orders', OrderList::class);
    Route::get('orders/{order}', OrderDetail::class);

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



});

Route::get('search', Search::class);
Route::get('products', Index::class);
Route::get('products/{product}', Show::class);
Route::get('categories/{category}/products', CategoryProducts::class);
Route::get('/', HomePage::class);
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    return "This route is not ready";
})->name('contact.submit');


Route::get('/about', function () {
    return view('about');
})->name('about');
