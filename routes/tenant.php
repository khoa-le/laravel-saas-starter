<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BillingController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::get("/", [\App\Http\Controllers\FrontPageController::class, 'home'])->name("frontpage.home");
    Route::get("/products", [\App\Http\Controllers\FrontPageController::class, 'products'])->name("frontpage.products");
    Route::get("/products/{product}", [\App\Http\Controllers\FrontPageController::class, 'product'])->name("frontpage.product_detail");
    Route::get("/contact", [\App\Http\Controllers\FrontPageController::class, 'contact'])->name("frontpage.contact");
    require __DIR__ . '/auth.php';


    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('settings/profile', [DashboardController::class, 'profile'])->name('settings.profile');
        Route::post('settings/profile', [DashboardController::class, 'saveProfile'])->name('settings.profile.save');

        Route::get('settings/security', [DashboardController::class, 'security'])->name('settings.security');
        Route::post('settings/security', [DashboardController::class, 'savePassword'])->name('settings.security.save');

        Route::get('settings/billing', [BillingController::class, 'index'])->name('settings.billing');
        Route::post('settings/billing', [BillingController::class, 'save'])->name('settings.billing.save');
        Route::post('settings/billing/switch_plan', [BillingController::class, 'switchPlan'])->name('billing.switch_plan');
    });

});


