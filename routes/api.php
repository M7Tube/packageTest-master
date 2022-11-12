<?php

use App\Http\Controllers\API\AppApiController;
use App\Http\Controllers\API\AuthController;
use App\Models\ReportCategory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CONTROL\CategoryController;
use App\Http\Controllers\ExportController;
use App\Models\Attrubite;
use App\Models\NewTemplate;
use App\Models\Template;
use Carbon\Carbon;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('test_create_template', [AppApiController::class, 'test_create_template'])->name('test_create_template');


//Protected Route
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['as' => 'Auth.'], function () {
        //get route
        Route::get('homepage/perpage/{perpage}', [AppApiController::class, 'homepage'])->name('homepage');
        // Route::get('handover/perpage/{perpage}', [AppApiController::class, 'gethandover'])->name('gethandover');
        // Route::get('Inspection/inProgress/history/perpage/{perpage}', [AppApiController::class, 'inProgressHistory'])->name('inProgressHistory');
        // Route::get('Inspection/Complate/history/perpage/{perpage}', [AppApiController::class, 'ComplateHistory'])->name('ComplateHistory');
        //Create Route
        Route::group(['prefix' => '/create'], function () {
            Route::get('/inspection/{id}', [AppApiController::class, 'inspection'])->name('inspection');
            // Route::post('/inspection/saveValue', [AppApiController::class, 'saveValue'])->name('saveValue');
            // Route::post('/inspection/inprogress', [AppApiController::class, 'inspection_inprogress'])->name('inspection_inprogress');
            // Route::post('/handover', [AppApiController::class, 'handover'])->name('handover');
            // Route::post('/template', [AppApiController::class, 'template'])->name('template');
            // Route::post('/form', [AppApiController::class, 'form'])->name('form');
        });
        //auth route
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
Route::get('/test', ExportController::class)->name('new_export');

//Un Protected Route
Route::group(['as' => 'noAuth.'], function () {
    //auth route
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::get('/migrate', function () {
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "refreshed";
});
Route::get('/clear', function () {
    return NewTemplate::find(1);
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
// Route::get('NewTemplateTest', [AppApiController::class, 'NewTemplateTest']);
// Route::get('detect-device', [AppApiController::class, 'detuctDebice'])->name('detect-device');
