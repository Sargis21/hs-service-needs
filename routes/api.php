<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ServiceController;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('company-name', [CompanyController::class, 'companyName']);
Route::get('home-page', [HomePageController::class, 'homePage']);
Route::get('about-data', [AboutController::class, 'about']);
Route::get('service-data', [ServiceController::class, 'service']);
Route::get('contact-data', [ContactController::class, 'contact']);
Route::post('send-email', [EmailController::class, 'email']);


