<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\storecontroller;

Route::get('error' , [storecontroller::class , 'error'])->name('error');
Route::get('/' , [storecontroller::class , 'index'])->name('index');

Route::get('about' , [storecontroller::class , 'about'])->name('about');

Route::get('adlist' , [storecontroller::class , 'adlist'])->name('adlist');

Route::get('adlisting' , [storecontroller::class , 'adlisting'])->name('adlisting');

Route::get('blog' , [storecontroller::class , 'blog'])->name('blog');

Route::get('category' , [storecontroller::class , 'category'])->name('category');

Route::get('contact' , [storecontroller::class , 'contact'])->name('contact');

Route::post('contact' , [storecontroller::class , 'contact_data'])->name('contact_data');

Route::get('dashboardarchivedads' , [storecontroller::class , 'dashboardarchivedads'])->name('dashboardarchivedads');

Route::get('dashboardfavouriteads' , [storecontroller::class , 'dashboardfavouriteads'])->name('dashboardfavouriteads');

Route::get('dashboardmyads' , [storecontroller::class , 'dashboardmads'])->name('dashboardmyads');


Route::get('dashboardpendingads' , [storecontroller::class , 'dashboardpendingads'])->name('dashboardpendingads');

Route::get('dashboard' , [storecontroller::class , 'dashboard'])->name('dashboard');


Route::get('login' , [storecontroller::class , 'login'])->name('login');

Route::get('package' , [storecontroller::class , 'package'])->name('package');

Route::get('register' , [storecontroller::class , 'register'])->name('register');

Route::get('singleblog' , [storecontroller::class , 'singleblog'])->name('singleblog');

Route::get('store' , [storecontroller::class , 'store'])->name('store');


Route::get('termscondition' , [storecontroller::class , 'termscondition'])->name('termscondition');

Route::get('userprofile' , [storecontroller::class , 'userprofile'])->name('singleblog');



