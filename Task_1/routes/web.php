<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\MyController;




Route::get('/',[MyController::class,'HomePage'])-> name('home');

Route::get('/about',[MyController::class,'AboutPage'])-> name('about');

Route::get('/teams',[MyController::class,'TeamsPage'])-> name('teams');

Route::get('/contact',[MyController::class,'ContactPage'])-> name('contact');

Route::get('/service',[MyController::class,'ServicePage'])-> name('service');