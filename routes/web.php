<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KpiGenAnpzController;
use App\Http\Controllers\Admin\KpiGenCBController;
use App\Http\Controllers\Admin\KpiGenPkopController;
use App\Http\Controllers\Admin\KpiGenPnhzController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\KpiZppController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //Impersonate
    Route::get('/impersonate/{user_id}', [UserController::class, 'impersonate'])->name('impersonate');
    Route::get('/impersonate_leave', [UserController::class,'impersonate_leave'])->name('impersonate_leave');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kpi Gen Anpzs
    Route::resource('kpi-gen-anpzs', KpiGenAnpzController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kpi Gen Pnhzs
    Route::resource('kpi-gen-pnhzs', KpiGenPnhzController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kpi Gen Pkops
    Route::resource('kpi-gen-pkops', KpiGenPkopController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kpi Gen C Bs
    Route::resource('kpi-gen-c-bs', KpiGenCBController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kpi Zpp
    Route::resource('kpi-zpps', KpiZppController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
