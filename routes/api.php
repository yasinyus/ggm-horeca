<?php

use App\Http\Controllers\API\AudienceController;
use App\Http\Controllers\API\Beerpong3dController;
use App\Http\Controllers\API\BeerpongController;
use App\Http\Controllers\API\BeerpongSetup;
use App\Http\Controllers\API\Beerpong3dSetup;
use App\Http\Controllers\API\CheckTokenController;
use App\Http\Controllers\API\FilterPhoto;
use App\Http\Controllers\API\QrController;
use App\Http\Controllers\API\SpinbottleSetup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::middleware('auth:sanctum')->group(function()

Route::post('/beerpong', [BeerpongController::class, 'store']);
Route::post('/beerpong_3d', [Beerpong3dController::class, 'store']);
Route::get('/spinbottle', [SpinbottleSetup::class, 'store']);
Route::get('/audience', [AudienceController::class, 'store']);
Route::get('/filter', [FilterPhoto::class, 'store']);
Route::get('/beerpong_setup', [BeerpongSetup::class, 'index']);
Route::get('/beerpong_3d_setup', [Beerpong3dSetup::class, 'index']);
Route::get('/spinbottle_setup', [SpinbottleSetup::class, 'index']);
Route::get('/filter_photo', [FilterPhoto::class, 'index']);
Route::get('/check_token', [CheckTokenController::class, 'index']);
Route::get('/qr_detail', [QrController::class, 'index']);

// });


