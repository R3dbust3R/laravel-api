<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;


Route::group(['prefix' => 'v1'], function () {
   
    Route::apiResource('/customers', CustomerController::class);
    Route::apiResource('/invoices', InvoiceController::class);

});
