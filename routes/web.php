<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategorySkillController;
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
