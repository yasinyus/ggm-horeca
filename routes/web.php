<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AudienceController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\MerchandiseController;
use App\Http\Controllers\Admin\OutletController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/login', function () {
    return view('auth.login');
});


Route::post('postlogin', [AuthController::class, 'postLogin'])->name('postlogin'); 
Route::post('postregistration', [AuthController::class, 'postRegistration'])->name('postregistration'); 
Route::get('keluar', [AuthController::class, 'logout'])->name('keluar');
Route::put('aksilengkapi', [AuthController::class, 'aksilengkapi'])->name('aksilengkapi');

Route::get('/', [HomeController::class, 'login'])->name('masuks');
Route::get('/masuk', [HomeController::class, 'login'])->name('masuk');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/lupa', [HomeController::class, 'lupa'])->name('lupa');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/lengkapi', [HomeController::class, 'lengkapi'])->name('lengkapi');
    Route::get('/stample', [HomeController::class, 'stample'])->name('stample');
    Route::get('/reset', [HomeController::class, 'reset'])->name('reset');
    Route::get('/klaim', [HomeController::class, 'klaim'])->name('klaim');
    Route::post('/hasilClaim', [HomeController::class, 'hasilClaim'])->name('hasilClaim');
    Route::get('/redeem', [HomeController::class, 'redeem'])->name('redeem');
    Route::post('/aksiRedeem', [HomeController::class, 'aksiRedeem'])->name('aksiRedeem');
    Route::post('/updateAvatar', [AuthController::class, 'updateAvatar'])->name('updateAvatar'); 
    Route::post('/editUser', [AuthController::class, 'editUser'])->name('editUser'); 
    Route::post('/resetPass', [AuthController::class, 'resetPass'])->name('resetPass'); 
 });


//log-viewers
Route::get('log-viewers', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'admin'], function () {

        //dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::resource('/admin', AreaController::class, ['as' => 'admin']);
        Route::resource('/area', AreaController::class, ['as' => 'admin']);
        Route::resource('/outlet', OutletController::class, ['as' => 'admin']);
        Route::resource('/qr_download/{id}', [OutletController::class, 'qr_download'])->name('qr_download');
        Route::resource('/merch', MerchandiseController::class, ['as' => 'admin']);
        Route::resource('/audience', AudienceController::class, ['as' => 'admin']);
        Route::resource('/user', UserController::class, ['as' => 'admin']);
        Route::resource('/setting', SettingController::class, ['as' => 'admin']);
        // Route::get('export/excel', 'DashboardController')->name('export.excel');
        Route::get('export/excel', [DashboardController::class, 'export'])->name('export.excel');
        Route::get('export/user', [UserController::class, 'exportUser'])->name('export.user');
        Route::post('outlet/addstock', [OutletController::class, 'addstock'])->name('admin.outlet.addstock');
        Route::post('import/area', [AreaController::class, 'import'])->name('import.area');

 
    });
});
