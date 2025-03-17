<?php

use App\Http\Controllers\Classrooms\ClassroomController;
use App\Http\Controllers\Parents\MyParentController;
use App\Http\Controllers\Sections\SectionController;
use App\Http\Controllers\Stages\StageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Livewire\Livewire;
use Livewire\Mechanisms\HandleComponents\HandleComponents;


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth'],
    ],
    function () {
        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ])->group(function () {
            Route::get('/dashboard', function () {
                return view('empty');
            })->name('dashboard');
        });

        Route::resource('Stages', StageController::class);
        Route::resource('Classrooms', ClassroomController::class);

        Route::post('delete_all', [ClassroomController::class, 'delete_all_records'])
            ->name('delete_all');

        Route::post('filter_classrooms', [ClassroomController::class, 'filter_classrooms'])
            ->name('filter_classrooms');

        Route::resource('Sections', SectionController::class);
        Route::get('/classes/{id}', [SectionController::class, 'getClasses']);

        Route::view('add_parent', 'livewire.show_form');

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    }
);
