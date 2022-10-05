<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;

Route::get('/', [PageController::class, 'home'])->name('fe.home');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('fe.about-us');
Route::get('contact-us', [PageController::class, 'contactUs'])->name('fe.contact-us');
Route::get('qa', [PageController::class, 'qa'])->name('fe.qa');