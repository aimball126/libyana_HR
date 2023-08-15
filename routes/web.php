<?php


use App\Http\Controllers\AccountsController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\CategoriesProgramsController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\CompanysController;
use App\Http\Controllers\EduProgramsController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagegalleryController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ItemsOrders;
use App\Http\Controllers\itemsordersController;
use App\Http\Controllers\MoneyCategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\ReceivedController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReturnsController;
use App\Http\Controllers\saleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SizesController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaitingController;
use App\Http\Controllers\WizardFormController;
use App\Http\Requests\MultiStepFormRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/clear', function() {

    Artisan::call('optimize:clear');
   Artisan::call('cache:clear');
      Artisan::call('optimize:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   Artisan::call('view:cache');
   Artisan::call('route:clear');

   return "Cleared!";

});

Auth::routes();



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
use App\Http\Controllers\RequestController;

Route::post('/requests', [RequestController::class, 'store'])->name('requests.store');


