<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    ClientController,
    PurchaseController,
    AddressController,
    InventoryController,
    MyInventoryController,
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

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout', [AuthController::class, "logout"]);
});

Route::post('/login', [AuthController::class, "login"]);

Route::apiResource('/products', ProductController::class);

Route::apiResource('/clients', ClientController::class);

Route::apiResource('/purchases', PurchaseController::class);

Route::apiResource('/addresses', AddressController::class);

Route::apiResource('/inventories', InventoryController::class);

Route::apiResource('/myinventory', MyInventoryController::class);




