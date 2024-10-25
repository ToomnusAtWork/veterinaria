<?php

use App\Enums\UserRolesEnum;
use App\Http\Livewire\ManageAppointments;
use App\Http\Middleware\Localization;
use App\Http\Controllers\LocalizationController;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController as AdminUsersController;
use App\Http\Controllers\Moderator\ProductController as ManageProductController;
use App\Http\Controllers\Moderator\ServiceController as ManageServiceController;


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

// require_once __DIR__ ."/fortify.php";

Route::get('localization/{locale}', LocalizationController::class)->name('localization');

// Specifiy middleware language.
Route::middleware(Localization::class)->group(function () {

    // Homepage 
    Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('home');
    Route::get('deals', [App\Http\Controllers\DisplayDeal::class, 'index'])->name('deals');
    Route::get('shelter', [App\Http\Controllers\ShelterController::class, 'index'])->name('shelter');
    
    Route::get('profile', [App\Http\Controllers\Settings\ProfileController::class, 'index'])->name('profile');
    // Route::redirect('/dashboard', '/profile');
    // Route::get('profile/{name?}', [App\Http\Controllers\Settings\ProfileController::class, 'show'])->name('profile');
    // Route::prefix('settings')->group(function () {
    //     Route::get('user/{name}', [App\Http\Controllers\Settings\ProfileController::class, 'edipht'])->name('profile.edit');
    // });

    Route::get('dashboard', [App\Http\Controllers\DashboardHomeController::class, 'index'])->name('dashboard');

    // Pets
    Route::prefix('my-pet')->group(function() {
        Route::get('/',  [App\Http\Controllers\PetsController::class, 'index'])->name('customer-pet');
        Route::get('create',  [App\Http\Controllers\PetsController::class, 'create'])->name('customer.create');
        Route::post('create',  [App\Http\Controllers\PetsController::class, 'store'])->name('customer-pet.store');
        Route::get('{pets}/edit',  [App\Http\Controllers\PetsController::class, 'edit'])->name('customer.edit');
        Route::put('{pets}',  [App\Http\Controllers\PetsController::class, 'update'])->name('customer-pet.update');
        Route::delete('/',  [App\Http\Controllers\PetsController::class, 'delete'])->name('customer-pet.delete');
    });

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
    
    // Staff Grouping
    Route::group(['prefix' => 'staff', 'middleware' => 'staff'], function () {

        // Manage Product
        Route::prefix('manage-product')->group(function () {
            Route::get('/', [ManageProductController::class, 'index'])->name('manage-product');
            Route::get('create', [ManageProductController::class, 'create'])->name('manage-product.create');
            Route::post('create',[ManageProductController::class, 'store'])->name('manage-product.store');
            Route::get('{product}', [ManageProductController::class, 'show'])->name('manage-product.show');
            Route::get('{product}/edit', [ManageProductController::class, 'edit'])->name( 'manage-product.edit');
            Route::put('{product}', [ManageProductController::class, 'update'])->name('manage-product.update');
            Route::delete('{product}', [ManageProductController::class, 'delete'])->name('manage-product.delete'); 
        });

        // Manage Service
        Route::prefix('manage-service')->group(function () {
            Route::get('/', [ManageServiceController::class, 'index'])->name('manage-service');
            Route::get('create', [ManageServiceController::class,'create'])->name('manage-service.create');
            Route::post('create', [ManageServiceController::class, 'store'])->name('manage-service.store');
            Route::get('{service}', [ManageServiceController::class, 'show'])->name('manage-service.show');
            Route::get('{service}/edit', [ManageServiceController::class, 'edit'])->name('manage-service.edit');
            Route::put('{service}/edit', [ManageServiceController::class, 'update'])->name('manage-service.update');
            Route::delete('{service}', [ManageServiceController::class, 'delete'])->name('manage-service.delete');
        });

    });
    
    // Admin Grouping
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::resource('manage-users', AdminUsersController::class)->name('index', 'manageusers');
        Route::resource('manage-users/user', AdminUsersController::class)->name('show', 'manageusers.show');
        Route::put('users/{id}/suspend', [App\Http\Controllers\UserSuspensionController::class, 'suspend'])->name('manageusers.suspend');
        Route::put('users/{id}/activate', [App\Http\Controllers\UserSuspensionController::class, 'activate'])->name('manageusers.activate');


        // Manage Appointment
        // Route::prefix('manage-appointment')->group(function () {
        //     Route::get('/', [ManageAppointmentsController::class,'index'])->name('manage-appointment');
        // });
    });

    //     // // Manage Shelter
    //     // Route::prefix('manage-service')->group(function () {

    //     // });
    
    // });
    
    
    

    // Appointment
    Route::prefix('appointment')->group(function () {
        Route::get('/', [App\Http\Controllers\Appointment\AppointmentController::class, 'index'])->name('appointments');
        // Route::get('appointments/{appointment_code}', [App\Http\Controllers\AppointmentController::class, 'show'])->name('appointments.show');
    });

    // Route::prefix('admin')->name('admin')->group(function () {
        // Route::get('/', []);
        // Route::resource('manage-users', AdminUsersController::class)->name('index', 'manageuser');
        //         Route::prefix('manage')->group( function () {
//             Route::resource('users', App\Http\Controllers\UserController::class)->name('index', 'manageusers');


    // });


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
