<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });
//Route::Scope resolution Operator 

// Route::method('url name', Action path to controller)->name('route_name');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home_index');//HomeControllerထဲကnamespace


Route::resource('contacts', App\Http\Controllers\ContactController::class);
// Route::get('contact', [App\Http\Controller\ContactController::class, 'index'])->name('contacts.index');
// Route::get('contact/create', [App\Http\Controller\ContactController::class, 'create'])->name('contact.create');
// Route::get('contact', [App\Http\Controller\ContactController::class, 'store'])->name('contact.store');
// Route::get('contact/{contact}', [App\Http\Controller\ContactController::class, 'show'])->name('contact.show');
// Route::get('contact/{contact}/edit', [App\Http\Controller\ContactController::class, 'edit'])->name('contact.edit');
// Route::put('contact/{contact}', [App\Http\Controller\ContactController::class, 'update'])->name('contact.update');
// Route::delete('contact/{contact}', [App\Http\Controller\ContactController::class, 'destroy'])->name('contact.destroy');

Route::resource('services', App\Http\Controllers\ServiceController::class);
// Route::get('service', [App\Http\Controller\ServiceController::class, 'index'])->name('services.index');
// Route::get('service/create', [App\Http\Controller\ServiceController::class, 'create'])->name('service.create');
// Route::get('service', [App\Http\Controller\ServiceController::class, 'store'])->name('service.store');
// Route::get('service/{service}', [App\Http\Controller\ServiceController::class, 'show'])->name('service.show');
// Route::get('service/{service}/edit', [App\Http\Controller\ServiceController::class, 'edit'])->name('service.edit');
// Route::put('service/{service}', [App\Http\Controller\ServiceController::class, 'update'])->name('service.update');
// Route::delete('service/{service}', [App\Http\Controller\ServiceController::class, 'destroy'])->name('service.destroy');