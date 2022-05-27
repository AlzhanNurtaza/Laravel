<?php
use App\Http\Controllers\Admin\BalanceController;
use App\Http\Controllers\Admin\CapexController;
use App\Http\Controllers\Admin\DdController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KpiGenAnpzController;
use App\Http\Controllers\Admin\KpiGenCBController;
use App\Http\Controllers\Admin\KpiGenPkopController;
use App\Http\Controllers\Admin\KpiGenPnhzController;
use App\Http\Controllers\Admin\KpiKlpeController;
use App\Http\Controllers\Admin\KpiKpiController;
use App\Http\Controllers\Admin\KpiZppController;
use App\Http\Controllers\Admin\OilTariffController;
use App\Http\Controllers\Admin\OpexController;
use App\Http\Controllers\Admin\OPiUController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductionVolumeController;
use App\Http\Controllers\Admin\LongLoanController;
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
    Route::get('/impersonate_leave', [UserController::class, 'impersonate_leave'])->name('impersonate_leave');

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

    // Kpi Klpe
    Route::resource('kpi-klpes', KpiKlpeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kpi Kpi
    Route::resource('kpi-kpis', KpiKpiController::class, ['except' => ['store', 'update', 'destroy']]);

    // O Pi U
    Route::resource('o-pi-us', OPiUController::class, ['except' => ['store', 'update', 'destroy']]);

    // Production Volume
    Route::resource('production-volumes', ProductionVolumeController::class, ['except' => ['store', 'update', 'destroy']]);
    
    // Opex
    Route::resource('opexes', OpexController::class, ['except' => ['store', 'update', 'destroy']]);

    // Capex
    Route::resource('capexes', CapexController::class, ['except' => ['store', 'update', 'destroy']]);

    // General
    Route::resource('generals', GeneralController::class, ['except' => ['store', 'update', 'destroy']]);

    // Dds
    Route::resource('dds', DdController::class, ['except' => ['store', 'update', 'destroy']]);

    // Balance
    Route::resource('balances', BalanceController::class, ['except' => ['store', 'update', 'destroy']]);

    // Oil Tariff
    Route::resource('oil-tariffs', OilTariffController::class, ['except' => ['store', 'update', 'destroy']]);

    // Long Loan
    Route::resource('long-loans', LongLoanController::class, ['except' => ['store', 'update', 'destroy']]);

});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
