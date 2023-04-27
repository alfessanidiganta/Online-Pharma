<?php
namespace App\Providers;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PharmacyController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\StoreCategory;
use App\Http\Controllers\Admin\StoreSubCategory;
use App\Http\Controllers\Admin\StoreProduct;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    return view('user_template.layout.template');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','Index')->name('Home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user'])->name('dashboard');

Route::middleware(['auth','role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard','Index')->name('admindashboard');

    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-category','Index')->name('allcategory');
        Route::get('/admin/add-category','AddCategory')->name('addcategory');
        Route::get('/admin/add-subcategory','AddSubCategory')->name('addsubcategory');
        Route::post('/admin/store-category','StoreCategory')->name('storecategory');
        Route::post('/admin/store-subcategory','StoreSubCategory')->name('storesubcategory');

    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/all-products','Index')->name('allproducts');
        Route::get('/admin/add-product','AddProduct')->name('addproduct');
        Route::get('/admin/edit-product','EditProduct')->name('editproduct');
        Route::post('/admin/store-product','StoreProduct')->name('storeproduct');

    });

    Route::controller(PharmacyController::class)->group(function () {
        Route::get('/admin/all-pharmacy','Index')->name('allpharmacy');
        Route::get('/admin/add-pharmacy','AddPharmacy')->name('addpharmacy');
        Route::get('/admin/edit-pharmacy','EditPharmacy')->name('editpharmacy');

    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/pending-order','Index')->name('pendingorder');

    });

});

require __DIR__.'/auth.php';
