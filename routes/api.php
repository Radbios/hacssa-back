<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    ClientController,
    PurchaseController,
    AddressController,
    InventoryController
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return "OK";
});


Route::apiResource('/products', ProductController::class);

Route::apiResource('/clients', ClientController::class);

Route::apiResource('/purchases', PurchaseController::class);

Route::apiResource('/addresses', AddressController::class);

Route::apiResource('/inventories', InventoryController::class);



