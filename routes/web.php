<?php

use App\Http\Controllers\AboutController;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ServiceController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Email;
use App\Models\HomePage;
use App\Models\Service;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/admin/home', function () {
    $companyName = Company::first()->name;
    $homeData = HomePage::all();
    return view('admin.home', compact(['companyName', 'homeData']));
})->middleware('auth')->name('admin-home');

Route::get('/admin/about', function () {
    $companyName = Company::first()->name;
    $abouts = About::all();
    return view('admin.about', compact(['companyName', 'abouts']));
})->middleware('auth')->name('admin-about');

Route::get('/admin/service', function () {
    $companyName = Company::first()->name;
    $services = Service::all();
    return view('admin.services', compact(['companyName', 'services']));
})->middleware('auth')->name('admin-services');

Route::get('/admin/contact', function () {
    $companyName = Company::first()->name;
    $contacts = Contact::all();
    return view('admin.contact', compact(['companyName', 'contacts']));
})->middleware('auth')->name('admin-contact');

Route::get('/admin/email', function () {
    $companyName = Company::first()->name;
    $emails = Email::all();
    return view('admin.email', compact(['companyName', 'emails']));
})->middleware('auth')->name('admin-email');

Route::post('company-name', [CompanyController::class, 'companyNameUpdate'])->name('companyNameUpdate');
Route::post('home-page', [HomePageController::class, 'homeDataUpdate'])->name('homeDataUpdate');
Route::post('about', [AboutController::class, 'aboutUpdate'])->name('aboutUpdate');
Route::post('service', [ServiceController::class, 'serviceUpdate'])->name('serviceUpdate');
Route::post('contact', [ContactController::class, 'contactUpdate'])->name('contactUpdate');
Route::post('delete-email', [EmailController::class, 'deleteEmail'])->name('deleteEmail');



Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*');

