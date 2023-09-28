<?php

use Illuminate\Support\Facades\Route;
//use Livewire\Livewire;
// use App\Http\Livewire\ProductCreate;
// use App\Http\Livewire\ProductUpdate;
// use App\Http\Livewire\ProductList;

//use App\Http\Controllers\ProductController;

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


// // Route to render the ProductCreate Livewire component
// Route::get('/products/create', ProductCreate::class)->name('products.create');

// // Route to render the ProductUpdate Livewire component with a dynamic product ID
// Route::get('/products/{product}/edit', ProductUpdate::class)->name('products.edit');