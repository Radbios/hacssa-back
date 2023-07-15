<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    ClientController,
    PurchaseController,
    PaymentController,
    AddressController,
    InventoryController,
    MyInventoryController,
    UserController,
    AuthController
};

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

Route::post('/login', [AuthController::class, "login"]);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout', [AuthController::class, "logout"]);

});

Route::middleware('role:admin')->group(function () {
    Route::apiResource('/users', UserController::class);
});

Route::middleware('role:director')->group(function () {
    Route::apiResource('/products', ProductController::class);
});

Route::middleware('role:sellers')->group(function () {
    Route::apiResource('/myinventory', MyInventoryController::class);
    Route::apiResource('/addresses', AddressController::class);
    Route::apiResource('/purchases', PurchaseController::class);
    Route::apiResource('/payments', PaymentController::class);
    Route::apiResource('/clients', ClientController::class);
});











