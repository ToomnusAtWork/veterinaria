<?php

use App\Enums\UserRolesEnum;
use App\Http\Middleware\Localization;
use App\Http\Controllers\LocalizationController;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/test', [App\Http\Controllers\AdminDashboardHome::class, 'index'])->name('test');

Route::get('/localization/{locale}', LocalizationController::class)->name('localization');

Route::middleware(Localization::class)->group(function () {

    Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('home');
    Route::get('services', [App\Http\Controllers\services\ServicesController::class, 'index'])->name('services');
    Route::get('services/{slug}', [App\Http\Controllers\DisplayService::class, 'show'])->name('services.show');
    Route::get('products', [App\Http\Controllers\products\ProductsController::class, 'index'])->name('products');
    Route::get('product/{name}', [App\Http\Controllers\products\ProductsController::class, 'show'])->name('view-product');
    Route::get('deals', [App\Http\Controllers\DisplayDeal::class, 'index'])->name('deals');
    Route::get('shelter', [App\Http\Controllers\ShelterController::class, 'index'])->name('shelter');

    // Users needs to be logged in for these routes
    // add admin route specificly
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {

        Route::prefix('dashboard')->group(function () {
            Route::get('/', [App\Http\Controllers\DashboardHomeController::class, 'index'])->name('dashboard');

            // middleware to give access only for admin
            Route::middleware([
                'validateRole:Admin'
            ])->group(function () {

                Route::prefix('manage')->group( function () {
                    Route::resource('users', App\Http\Controllers\UserController::class)->name('index', 'manageusers');
                    Route::put('users/{id}/suspend', [App\Http\Controllers\UserSuspensionController::class, 'suspend'])->name('manageusers.suspend');
                    Route::put('users/{id}/activate', [App\Http\Controllers\UserSuspensionController::class, 'activate'])->name('manageusers.activate');

                    Route::get('locations', function () {
                        return view('dashboard.manage-locations.index');
                    })->name('managelocations');
                });
            });

            // middlleware to give access only for admin and employee
            Route::middleware([
                'validateRole:Admin,Employee'
            ])->group(function () {

                Route::prefix('manage')->group( function () {
                    Route::get('services', function () {
                        return view('dashboard.manage-services.index');
                    })->name('manageservices');

                    Route::get('deals', function () {
                        return view('dashboard.manage-deals.index');
                    })->name('managedeals');

                    Route::get('categories', function () {
                        return view('dashboard.manage-categories.index');
                    })->name('managecategories' );

                    Route::get('categories/create', function () {
                        return view('dashboard.manage-categories.index');
                    })->name('managecategories.create');

                    Route::get('appointments', function () {
                        return view('dashboard.manage-appointments.index');
                    })->name('manageappointments');
                    
                    Route::get('products', function () {
                        return view('dashboard.manage-products.index');
                    })->name('manageproducts');
                    
                } );



                // analytics route group


            });

            Route::middleware([
                'validateRole:Customer'
            ])->group(function () {

                Route::prefix('cart')->group( function () {
                    Route::get('/', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
                    Route::post('/', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
                    Route::delete('/item/{cart_service_id}', [App\Http\Controllers\CartController::class, 'removeItem'])->name('cart.remove-item');
                    Route::delete('/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
                    Route::post('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout');
                });


                // Get the appointments of the user
    //            Route::get('appointments', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointments');
    //
    //            // View an appointment
    //            Route::get('appointments/{appointment_code}', [App\Http\Controllers\AppointmentController::class, 'show'])->name('appointments.show');
    //
    //            // Cancel an appointment
    //            Route::delete('appointments/{appointment_code}', [App\Http\Controllers\AppointmentController::class, 'destroy'])->name('appointments.destroy');

            });
        });
    });
});
