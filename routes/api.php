<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\{AuthenticatedSessionController, 
RegisteredUserController, PasswordResetLinkController};
// use App\Http\Controllers\EmailVerificationNotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);

//     return ['token' => $token->plainTextToken];
// });


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::prefix('auth')->group(function () {
        Route::withoutMiddleware('auth:sanctum')->group(function () {

            Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest:'.config('fortify.guard'));

            Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest:'. config('fortify.guard'));

            Route::post('/forgot', [PasswordResetLinkController::class, 'store'])->middleware('guest:'. config('fortify.guard'))
                ->name('password.email');

        });
    });
});

// Route::post('/email/verification-notification' [EmailVerificationNotificationController::class, 'store'])
//     ->middleware([
//         'auth:sanctum',
// ]);

// Route::middleware([
//         'auth:sanctum',
//         'validateRole:Admin,Employee'
//     ]
//     )->group(
//     function () {

//         Route::prefix('services')->group( function () {
//             Route::get('/', [\App\Http\Controllers\ServicesAPI::class, 'index'])->name('api-services.index');
//             Route::get('/{id}', [\App\Http\Controllers\ServicesAPI::class, 'show'])->name('api-services.show');
//             Route::post('/', [\App\Http\Controllers\ServicesAPI::class, 'store'])->name('api-services.store');
//             Route::put('/{id}', [\App\Http\Controllers\ServicesAPI::class, 'update'])->name('api-services.update');
//             Route::delete('/{id}', [\App\Http\Controllers\ServicesAPI::class, 'destroy'])->name('api-services.destroy');
//         });

//         Route::prefix('customers')->group( function () {
//             Route::get('/', [\App\Http\Controllers\CustomerAPI::class, 'index'])->name('api-customers.index');
//             Route::get('/{id}', [\App\Http\Controllers\CustomerAPI::class, 'show'])->name('api-customers.show');
//             Route::post('/', [\App\Http\Controllers\CustomerAPI::class, 'store'])->name('api-customers.store');
//             Route::put('/{id}', [\App\Http\Controllers\CustomerAPI::class, 'update'])->name('api-customers.update');
//             Route::delete('/{id}', [\App\Http\Controllers\CustomerAPI::class, 'destroy'])->name('api-customers.destroy');

//         });







//     }
// );



