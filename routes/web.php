<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjobController;
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/products', [EjobController::class, 'index']);
// Route::post('/addproducts', [EjobController::class, 'addproducts']);
// Route::get('/viewproducts', [EjobController::class, 'viewproducts']);
// Route::get('/editproducts/{eid}', [EjobController::class, 'editproducts']);
// Route::post('/updateproducts', [EjobController::class, 'updateproducts']);
// Route::get('/deleteproducts/{eid}', [EjobController::class, 'deleteproducts']);


//api
Route::post('/api/addproducts', [ApiController::class, 'addproducts']);
Route::get('/api/viewproducts', [ApiController::class, 'viewproducts']);
Route::put('/api/updateproducts', [ApiController::class, 'updateproducts']);
Route::delete('/api/deleteproducts/{eid}', [ApiController::class, 'deleteproducts']);

