<?php

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

Route::view('test-location', 'test_location');
Route::get('/', function () {
    return redirect()->route('login');
});
// ==========New Dashboard Design=================
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    // Route::view('/test','layouts.dashboard')->name('dashboard');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // SCHEDULES PAGES THAT CONTAIN ALL THE FUTUERS OF THIS SECTION
    Route::group(['prefix' => 'schedules'], function () {
        Route::view('/', 'NewPages.schedule.index')->name('index.schedule');
    });
    Route::group(['prefix' => 'templates'], function () {
        Route::view('/', 'NewPages.template.index')->name('index.template');
        Route::view('/test', 'NewPages.template.test');
         Route::view('/create', 'NewPages.template.create')->name('create.template');
//        Route::view('/create2', 'NewPages.template.create');
        // , ['new_template' => 0]
        Route::view('/preview/id/{id?}', 'NewPages.template.preview')->name('preview.template');
    });
    Route::group(['prefix' => 'inspection'], function () {
        Route::view('/', 'NewPages.inspection.index')->name('index.inspection');
        Route::view('/start/id/{id}', 'NewPages.inspection.start')->name('start.inspection');
    });
    Route::group(['prefix' => 'docuemnts'], function () {
        Route::view('/', 'NewPages.docuemnts.index')->name('index.docuemnts');
    });
});
require __DIR__ . '/auth.php';

Route::group(['prefix' => 'fire-ext'], function () {

    Route::view('/', 'Fire-Ext.qrcode-test');
    Route::view('/number/{number}/project_code/{project_code}', 'Fire-Ext.spec-fire-ext')->name('fire-ext');
});




Route::view('CheckWhereAmI', 'test_views.CheckWhereAmI');
Route::view('dashboardtest', 'test_views.dashboardtest');
