<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategorySkillController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactMeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
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

Route::get('/test', function () {
    // dd(Auth::user());

});

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

// Category Skill
Route::controller(CategorySkillController::class)->group(function () {
    // prefix name for url
    Route::prefix('category-skills')->group(function () {
        // name for route
        Route::name('category-skill.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Skill
Route::controller(SkillController::class)->group(function () {
    // prefix name for url
    Route::prefix('skills')->group(function () {
        // name for route
        Route::name('skill.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// TypeQualification
Route::controller(TypeQualificationController::class)->group(function () {
    // prefix name for url
    Route::prefix('type-qualifications')->group(function () {
        // name for route
        Route::name('typeQualification.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Qualification
Route::controller(QualificationController::class)->group(function () {
    // prefix name for url
    Route::prefix('qualifications')->group(function () {
        // name for route
        Route::name('qualification.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Service
Route::controller(ServiceController::class)->group(function () {
    // prefix name for url
    Route::prefix('services')->group(function () {
        // name for route
        Route::name('services.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Portfolio
Route::controller(PortfolioController::class)->group(function () {
    // prefix name for url
    Route::prefix('portfolios')->group(function () {
        // name for route
        Route::name('portfolio.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Client
Route::controller(ClientController::class)->group(function () {
    // prefix name for url
    Route::prefix('clients')->group(function () {
        // name for route
        Route::name('client.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Message
Route::controller(ContactMeController::class)->group(function () {
    // prefix name for url
    Route::prefix('messages')->group(function () {
        // name for route
        Route::name('message.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Profile
Route::controller(ProfileController::class)->group(function () {
    // prefix name for url
    Route::prefix('profile')->group(function () {
        // name for route
        Route::name('profile.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

// Setting
Route::controller(SettingsController::class)->group(function () {
    // prefix name for url
    Route::prefix('settings')->group(function () {
        // name for route
        Route::name('settings.')->group(function () {

            Route::get('/', 'index')->name('index');

        });
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin-panel.dashboard.index');
    })->name('dashboard');
});
