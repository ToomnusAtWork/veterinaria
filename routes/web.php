<?php

use App\Enums\UserRolesEnum;
use App\Http\Middleware\Localization;
use App\Http\Controllers\LocalizationController;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController as AdminUsersController;
use App\Http\Controllers\Moderator\ProductController as ManageProductController;


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

require_once __DIR__ ."/fortify.php";

Route::get('localization/{locale}', LocalizationController::class)->name('localization');

// Specifiy middleware language.
Route::middleware(Localization::class)->group(function () {

    // Homepage 
    Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('home');
    Route::get('deals', [App\Http\Controllers\DisplayDeal::class, 'index'])->name('deals');
    Route::get('shelter', [App\Http\Controllers\ShelterController::class, 'index'])->name('shelter');
    
    // Route::get('profile', [App\Http\Controllers\Settings\ProfileController::class, 'index'])->name('profile');
    // Route::redirect('/dashboard', '/profile');
    // Route::get('profile/{name?}', [App\Http\Controllers\Settings\ProfileController::class, 'show'])->name('profile');
    // Route::prefix('settings')->group(function () {
    //     Route::get('user/{name}', [App\Http\Controllers\Settings\ProfileController::class, 'edit'])->name('profile.edit');
    // });


    // Product
    Route::prefix('product')->group(function () {
        Route::get('/', [App\Http\Controllers\Products\ProductsController::class, 'index'])->name('product');
        Route::get('{product}', [App\Http\Controllers\Products\ProductsController::class, 'show'])->name('product.show');
    });

    // Service
    Route::prefix('service')->group(function () {
        Route::get('/', [App\Http\Controllers\Services\ServicesController::class, 'index'])->name('services');
        Route::get('{slug}', [App\Http\Controllers\DisplayService::class, 'show'])->name('services.show');
    });

    // Product Cart
    Route::prefix('cart')->group( function () {
        Route::get('/', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
        Route::post('/', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
        Route::delete('/item/{cart_service_id}', [App\Http\Controllers\CartController::class, 'removeItem'])->name('cart.remove-item');
        Route::delete('/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
        Route::post('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout');
    });

    // Route::get('manage', [App\Http\Controllers\Products\ProductsController::class,'moderator'])->name('manage.product');
    // Route::get('manage/create-product', [App\Http\Controllers\Products\ProductsController::class, 'create'])->name('product.create');
    // Route::get('edit', [App\Http\Controllers\Products\ProductsController::class, 'edit'])->name('product.edit');
    // Route::post('create-product', [App\Http\Controllers\Products\ProductsController::class, 'store'])->name('product.store');

    Route::get('dashboard', [App\Http\Controllers\DashboardHomeController::class, 'index'])->name('dashboard');

    // Staff Role
    Route::prefix('staff')->group(function () {

        // Manage Product
        Route::prefix('manage-product')->group(function () {
            Route::get('/', [ManageProductController::class, 'index'])->name('manage-product');
            Route::get('create', [ManageProductController::class, 'create'])->name('manage-product.create');
            Route::post('create',[ManageProductController::class, 'store'])->name('manage-product.store');
            // Route::resource('edit', ManageProductController::class)->name('edit', 'product.edit');
            // Route::get('{product}', ManageProductController::class)->name('manage-product.show');
        });

        // Manage Service
        // Route::prefix('manage-service')->group(function () {

        // });

        // // Manage Shelter
        // Route::prefix('manage-service')->group(function () {

        // });
    
    });
    
    
    

    // Appointment
    Route::prefix('appointment')->group(function () {
        Route::get('/', [App\Http\Controllers\Appointment\AppointmentController::class, 'index'])->name('appointments');
        // Route::get('appointments/{appointment_code}', [App\Http\Controllers\AppointmentController::class, 'show'])->name('appointments.show');
    });

    Route::prefix('admin')->name('admin')->group(function () {
        // Route::get('/', []);
        Route::resource('manage-users', AdminUsersController::class)->name('index', 'manageuser');

    });


    // Route::redirect('/dashboard', '/user');
    // middelware for Service

 
    // Users needs to be logged in for these routes
    // add admin route specificly
    // Route::middleware([
    //     'auth:sanctum',
    //     config('jetstream.auth_session'),
    //     'verified',
    // ])->group(function () {

    //     // Customer
    //     Route::middleware([
    //         'validateRole:Customer'
    //     ])->group(function () {
    //         Route::get('')->name('');
    //     });

    //     // middleware to give access only for admin and employee
    //     Route::middleware([
    //         'validateRole:Admin,Employee'
    //     ])->group(function () {
    //         Route::prefix('manage')->group( function () {
    //             Route::get('services', function () {
    //                 return view('dashboard.manage-services.index');
    //             })->name('manageservices');

    //             Route::get('deals', function () {
    //                 return view('dashboard.manage-deals.index');
    //             })->name('managedeals');

    //             Route::get('categories', function () {
    //                 return view('dashboard.manage-categories.index');
    //             })->name('managecategories' );

    //             Route::get('categories/create', function () {
    //                 return view('dashboard.manage-categories.index');
    //             })->name('managecategories.create');

    //             Route::get('appointments', function () {
    //                 return view('dashboard.manage-appointments.index');
    //             })->name('manageappointments');
                
    //             Route::get('products', function () {
    //                 return view('dashboard.manage-products.index');
    //             })->name('manageproducts');
    //         });
    //     });

    //     // Admin 
    //     Route::middleware([
    //         'validateRole:Admin'
    //     ])->group(function () {
    //         Route::prefix('admin')->group(function () {
    //         });
    //     });
       
    // });
});


// Route::prefix('dashboard')->group(function () {
//     Route::get('/', [App\Http\Controllers\DashboardHomeController::class, 'index'])->name('dashboard');

//     // middleware to give access only for admin
//     Route::middleware([
//         'validateRole:Admin'
//     ])->group(function () {

//         Route::prefix('manage')->group( function () {
//             Route::resource('users', App\Http\Controllers\UserController::class)->name('index', 'manageusers');
//             Route::put('users/{id}/suspend', [App\Http\Controllers\UserSuspensionController::class, 'suspend'])->name('manageusers.suspend');
//             Route::put('users/{id}/activate', [App\Http\Controllers\UserSuspensionController::class, 'activate'])->name('manageusers.activate');

//             Route::get('locations', function () {
//                 return view('dashboard.manage-locations.index');
//             })->name('managelocations');
//         });
//     });

//     // middlleware to give access only for admin and employee
//     Route::middleware([
//         'validateRole:Admin,Employee'
//     ])->group(function () {

//         Route::prefix('manage')->group( function () {
//             Route::get('services', function () {
//                 return view('dashboard.manage-services.index');
//             })->name('manageservices');

//             Route::get('deals', function () {
//                 return view('dashboard.manage-deals.index');
//             })->name('managedeals');

//             Route::get('categories', function () {
//                 return view('dashboard.manage-categories.index');
//             })->name('managecategories' );

//             Route::get('categories/create', function () {
//                 return view('dashboard.manage-categories.index');
//             })->name('managecategories.create');

//             Route::get('appointments', function () {
//                 return view('dashboard.manage-appointments.index');
//             })->name('manageappointments');
            
//             Route::get('products', function () {
//                 return view('dashboard.manage-products.index');
//             })->name('manageproducts');


            
//         } );


//     });

//     Route::middleware([
//         'validateRole:Customer'
//     ])->group(function () {






//     });
// });
