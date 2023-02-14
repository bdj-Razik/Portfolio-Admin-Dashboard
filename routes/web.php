<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategorySkillController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactMeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TypeQualificationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.admin-panel');
});

// About us
Route::controller(AboutUsController::class)->group(function () {
    // prefix name for url
    Route::prefix('abouts-us')->group(function () {
        // name for route
        Route::name('abouts.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::controller(CategorySkillController::class)->group(function () {
    // prefix name for url
    Route::prefix('category-skill')->group(function () {
        // name for route
        Route::name('category-skill.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::controller(SkillController::class)->group(function () {
    // prefix name for url
    Route::prefix('skill')->group(function () {
        // name for route
        Route::name('skill.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::controller(TypeQualificationController::class)->group(function () {
    // prefix name for url
    Route::prefix('type-qualification')->group(function () {
        // name for route
        Route::name('typeQualification.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::controller(QualificationController::class)->group(function () {
    // prefix name for url
    Route::prefix('qualification')->group(function () {
        // name for route
        Route::name('qualification.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::controller(ServiceController::class)->group(function () {
    // prefix name for url
    Route::prefix('service')->group(function () {
        // name for route
        Route::name('service.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::controller(PortfolioController::class)->group(function () {
    // prefix name for url
    Route::prefix('portfolio')->group(function () {
        // name for route
        Route::name('portfolio.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::controller(ClientController::class)->group(function () {
    // prefix name for url
    Route::prefix('client')->group(function () {
        // name for route
        Route::name('client.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});


Route::controller(ContactMeController::class)->group(function () {
    // prefix name for url
    Route::prefix('message')->group(function () {
        // name for route
        Route::name('message.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});
