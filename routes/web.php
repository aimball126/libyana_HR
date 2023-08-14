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


Route::get('/sections', [HomeController::class, 'sections'])->name('sections');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get("/shop","ShopController@index");
Route::get('/shop/{id}/show', [ShopController::class, 'show'])->name('show-shop');
Route::get('/shop/{id}/filter', [ShopController::class, 'filter'])->name('filter-shop');

//Accounts
Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts');
Route::get('/accounts/add', [AccountsController::class, 'add'])->name('add-accounts');
Route::post('/accounts/store', [AccountsController::class, 'store'])->name('store-accounts');
Route::post('/accounts/{id}/update', [AccountsController::class, 'update'])->name('update-accounts');
Route::get('/accounts/{id}/edit', [AccountsController::class, 'edit'])->name('edit-accounts');
Route::post('/accounts/{id}/destroy', [AccountsController::class, 'destroy'])->name('destroy-accounts');
Route::get('/accounts/{id}/show', [AccountsController::class, 'show'])->name('show-accounts');
//users
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/add', [UserController::class, 'add'])->name('add-user');
Route::post('/users/store', [UserController::class, 'store'])->name('store-user');
Route::post('/users/{id}/update', [UserController::class, 'update'])->name('update-user');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit-user');
Route::post('/users/{id}/destroy', [UserController::class, 'destroy'])->name('destroy-user');

//Stores
Route::get('/stores', [StoreController::class, 'index'])->name('stores');
Route::get('/stores/add', [StoreController::class, 'add'])->name('add-stores');
Route::post('/stores/store', [StoreController::class, 'store'])->name('store-stores');
Route::post('/stores/{id}/update', [StoreController::class, 'update'])->name('update-stores');
Route::post('/stores/{id}/destroy', [StoreController::class, 'destroy'])->name('destroy-stores');
Route::get('/stores/{id}/show', [StoreController::class, 'show'])->name('show-stores');

//Items
Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::get('/items/add', [ItemsController::class, 'add'])->name('add-items');
Route::post('/items/store', [ItemsController::class, 'store'])->name('store-items');
Route::post('/items/{id}/update', [ItemsController::class, 'update'])->name('update-items');
Route::post('/items/{id}/destroy', [ItemsController::class, 'destroy'])->name('destroy-items');
Route::get('/items/{id}/show', [ItemsController::class, 'show'])->name('show-items');

//Sale

Route::get('/sale/{id}/edit', [saleController::class, 'edit'])->name('edit-sale');
Route::get('/sale/search', [saleController::class, 'search'])->name('search-sale');
Route::get('/sale/create', [saleController::class, 'create'])->name('create-sale');
Route::get('/sale', [saleController::class, 'index'])->name('sale');
Route::get('/test', [saleController::class, 'test'])->name('test');
Route::get('/sale/add', [saleController::class, 'add'])->name('add-sale');
Route::post('/sale/store', [saleController::class, 'store'])->name('store-sale');
Route::post('/sale/{id}/update', [saleController::class, 'update'])->name('update-sale');
Route::post('/sale/{id}/destroy', [saleController::class, 'destroy'])->name('destroy-sale');
Route::any('/sale/show', [saleController::class, 'show'])->name('show-sale');
Route::any('/sale/{id}/flag', [saleController::class, 'flag'])->name('flag-sale');
//Categories Programs
Route::get('/categories_programs', [CategoriesProgramsController::class, 'index'])->name('categories_programs');
Route::get('/categories_programs/add', [CategoriesProgramsController::class, 'add'])->name('add-categories_programs');
Route::post('/categories_programs/store', [CategoriesProgramsController::class, 'store'])->name('store-categories_programs');
Route::post('/categories_programs/{id}/update', [CategoriesProgramsController::class, 'update'])->name('update-categories_programs');
Route::post('/categories_programs/{id}/destroy', [CategoriesProgramsController::class, 'destroy'])->name('destroy-categories_programs');

//Edu programs
Route::get('/edu_programs', [EduProgramsController::class, 'index'])->name('edu_programs');
Route::get('/edu_programs/add', [EduProgramsController::class, 'add'])->name('add-edu_programs');
Route::post('/edu_programs/store', [EduProgramsController::class, 'store'])->name('store-edu_programs');
Route::post('/edu_programs/{id}/update', [EduProgramsController::class, 'update'])->name('update-edu_programs');
Route::post('/edu_programs/{id}/destroy', [EduProgramsController::class, 'destroy'])->name('destroy-edu_programs');

//Items Orders
Route::get('/items_orders/add', [itemsordersController::class, 'add'])->name('add-items_orders');
Route::post('/items_orders/store', [itemsordersController::class, 'store'])->name('store-items_orders');
Route::post('/items_orders/{id}/update', [itemsordersController::class, 'update'])->name('update-items_orders');
Route::post('/items_orders/{id}/destroy', [itemsordersController::class, 'destroy'])->name('destroy-items_orders');

//Returns
Route::get('/returns', [ReturnsController::class, 'index'])->name('returns');
Route::get('/returns/add', [ReturnsController::class, 'add'])->name('add-returns');
Route::post('/returns/store', [ReturnsController::class, 'store'])->name('store-returns');
Route::post('/returns/{id}/update', [ReturnsController::class, 'update'])->name('update-returns');
Route::post('/returns/{id}/destroy', [ReturnsController::class, 'destroy'])->name('destroy-returns');
Route::get('/returns/{id}/show', [ReturnsController::class, 'show'])->name('show-returns');
Route::get('/returns/search', [ReturnsController::class, 'search'])->name('search-returns');
Route::get("addmore","HomeController2@addMore");
Route::post("addmore","HomeController2@addMorePost");

//Received
Route::get('/received', [ReceivedController::class, 'index'])->name('received');
Route::get('/received/add', [ReceivedController::class, 'add'])->name('add-received');
Route::post('/received/store', [ReceivedController::class, 'store'])->name('store-received');
Route::post('/received/{id}/update', [ReceivedController::class, 'update'])->name('update-received');
Route::post('/received/{id}/destroy', [ReceivedController::class, 'destroy'])->name('destroy-received');
Route::get('/received/{id}/show', [ReceivedController::class, 'show'])->name('show-received');
Route::get('/received/search', [ReceivedController::class, 'search'])->name('search-received');
//Reports
Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::get('/return_report', [ReportController::class, 'return_index'])->name('return_report');
Route::get('/purchases_report', [ReportController::class, 'purchases_index'])->name('purchases_report');
Route::get('/received_report', [ReportController::class, 'received_index'])->name('received_index');
Route::get('/waiting_report', [ReportController::class, 'waiting_index'])->name('waiting_index');
Route::post('/Search_Report','ReportController@Search_Report');
Route::post('/Returns_Report','ReportController@Returns_Report');
Route::post('/Purchases_Report','ReportController@Purchases_Report');
Route::post('/Received_Report','ReportController@Received_Report');
Route::post('/Waiting_Report','ReportController@Waiting_Report');



//Purchases
Route::get('/purchases', [PurchasesController::class, 'index'])->name('purchases');
Route::get('/purchases/add', [PurchasesController::class, 'add'])->name('add-purchases');
Route::post('/purchases/store', [PurchasesController::class, 'store'])->name('store-purchases');
Route::post('/purchases/{id}/update', [PurchasesController::class, 'update'])->name('update-purchases');
Route::post('/purchases/{id}/destroy', [PurchasesController::class, 'destroy'])->name('destroy-purchases');
Route::get('/purchases/{id}/show', [PurchasesController::class, 'show'])->name('show-purchases');

//Companys
Route::get('/companys', [ CompanysController::class, 'index'])->name('companys');
Route::get('/companys/add', [CompanysController::class, 'add'])->name('add-companys');
Route::post('/companys/store', [CompanysController::class, 'store'])->name('store-companys');
Route::post('/companys/{id}/update', [CompanysController::class, 'update'])->name('update-companys');
Route::post('/companys/{id}/destroy', [CompanysController::class, 'destroy'])->name('destroy-companys');
Route::get('/companys/{id}/show', [CompanysController::class, 'show'])->name('show-companys');

//Products
Route::get('/products', [ ProductsController::class, 'index'])->name('products');
Route::get('/products/add', [ProductsController::class, 'add'])->name('add-products');
Route::post('/products/store', [ProductsController::class, 'store'])->name('store-products');
Route::post('/products/{id}/update', [ProductsController::class, 'update'])->name('update-products');
Route::post('/products/{id}/destroy', [ProductsController::class, 'destroy'])->name('destroy-products');
Route::get('/products/{id}/show', [ProductsController::class, 'show'])->name('show-products');

//colors
Route::get('/colors', [ ColorsController::class, 'index'])->name('colors');
Route::get('/colors/add', [ColorsController::class, 'add'])->name('add-colors');
Route::post('/colors/store', [ColorsController::class, 'store'])->name('store-colors');
Route::post('/colors/{id}/update', [ColorsController::class, 'update'])->name('update-colors');
Route::post('/colors/{id}/destroy', [ColorsController::class, 'destroy'])->name('destroy-colors');
Route::get('/colors/{id}/show', [ColorsController::class, 'show'])->name('show-colors');

//sizes
Route::get('/sizes', [ SizesController::class, 'index'])->name('sizes');
Route::get('/sizes/add', [SizesController::class, 'add'])->name('add-sizes');
Route::post('/sizes/store', [SizesController::class, 'store'])->name('store-sizes');
Route::post('/sizes/{id}/update', [SizesController::class, 'update'])->name('update-sizes');
Route::post('/sizes/{id}/destroy', [SizesController::class, 'destroy'])->name('destroy-sizes');
Route::get('/sizes/{id}/show', [SizesController::class, 'show'])->name('show-sizes');


//features
Route::get('/features', [ FeaturesController::class, 'index'])->name('features');
Route::get('/features/add', [FeaturesController::class, 'add'])->name('add-features');
Route::post('/features/store', [FeaturesController::class, 'store'])->name('store-features');
Route::post('/features/{id}/update', [FeaturesController::class, 'update'])->name('update-features');
Route::post('/features/{id}/destroy', [FeaturesController::class, 'destroy'])->name('destroy-features');
Route::get('/features/{id}/show', [FeaturesController::class, 'show'])->name('show-features');
//imagegallery
Route::get('/imagegallery', [ ImagegalleryController::class, 'index'])->name('imagegallery');
Route::get('/imagegallery/add', [ImagegalleryController::class, 'add'])->name('add-imagegallery');
Route::post('/imagegallery/store', [ImagegalleryController::class, 'store'])->name('store-imagegallery');
Route::post('/imagegallery/{id}/update', [ImagegalleryController::class, 'update'])->name('update-imagegallery');
Route::post('/imagegallery/{id}/destroy', [ImagegalleryController::class, 'destroy'])->name('destroy-imagegallery');
Route::get('/imagegallery/{id}/show', [ImagegalleryController::class, 'show'])->name('show-imagegallery');
//Variants
Route::get('/variants', [ VariantsController::class, 'index'])->name('variants');
Route::get('/variants/add', [VariantsController::class, 'add'])->name('add-variants');
Route::post('/variants/store', [VariantsController::class, 'store'])->name('store-variants');
Route::post('/variants/{id}/update', [VariantsController::class, 'update'])->name('update-variants');
Route::post('/variants/{id}/destroy', [VariantsController::class, 'destroy'])->name('destroy-variants');
Route::get('/variants/{id}/show', [VariantsController::class, 'show'])->name('show-variants');
//Waiting
Route::get('/waiting', [WaitingController::class, 'index'])->name('waiting');
Route::get('/waiting/search', [WaitingController::class, 'search'])->name('search-waiting');


