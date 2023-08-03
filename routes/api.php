<?php

use App\Http\Controllers\api\CreateController;
use App\Http\Controllers\api\DeleteController;
use App\Http\Controllers\api\ReadController;
use App\Http\Controllers\api\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/create', [CreateController::class, 'index']);
Route::post('/delete', [DeleteController::class, 'index']);
Route::post('/read',   [ReadController::class, 'index']);
Route::post('/update', [UpdateController::class, 'index']);

// Route::post('/delete', [DeletePolicyLogistic::class, 'index']);



// Route::group(['prefix' => '/v1'], function () {
//     Route::middleware(['tokenDirAdmin'])->group(function () {
//         Route::group(['prefix' => '/Logistic'], function () {
//             Route::post('/create', [CreatePolicyLogistic::class, 'index']);
//             Route::get('/read/{id?}', [ReadPolicyLogistic::class, 'index']);
//             Route::put('/update', [UpdatePolicyLogistic::class, 'index']);
//             Route::delete('/delete', [DeletePolicyLogistic::class, 'index']);
//         });

//         Route::group(['prefix' => '/Client'], function () {
//             Route::post('/create', [CreatePolicyClients::class, 'index']);
//             Route::get('/read/{id?}', [ReadPolicyClients::class, 'index']);
//             Route::put('/update', [UpdatePolicyClients::class, 'index']);
//             Route::delete('/delete', [DeletePolicyClients::class, 'index']);
//         });
//     });
// });
