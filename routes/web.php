<?php


use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;



use Illuminate\Support\Facades\Route;

//website routes
Route::get('/',[WebsiteController::class,'webhome'])->name('website');
Route::post('/reg-store',[WebsiteController::class,'regstore'])->name('regstore');
Route::post('/web-login',[WebsiteController::class,'weblogin'])->name('weblogin');
Route::get('/weblogout',[WebsiteController::class,'weblogout'])->name('weblogout');
Route::get('/product-search',[WebsiteController::class,'productsearch'])->name('product.search');






//admin panel routes
Route::group(['prefix'=>'admin'],function(){

    Route::get('/login', [HomeController::class,'login'])->name('login');
    Route::post('/do-login',[HomeController::class,'dologin'])->name('do.login');


            //for auth
        Route::group(['middleware'=>'auth'], function(){

            Route::group(['middleware'=>'checkadmin'], function(){

            //for logout
            Route::get('/logout',[HomeController::class,'logout'])->name('logout');

            //for home
            Route::get('/', [HomeController::class,'home'])->name('home');
                
            //for category
            Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
            Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
            Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
            Route::get('/category/view/{id}',[CategoryController::class,'view'])->name('category.view');
            Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
            Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
            Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');


           


            //for product
            Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
            Route::get('/product/form',[ProductController::class,'form'])->name('product.form');
            Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
            Route::get('/product/view/{id}',[ProductController::class,'view'])->name('product.view');
            Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

            //for brand
            Route::get('/brand/list',[BrandController::class,'list'])->name('brand.list');
            Route::get('/brand/form',[BrandController::class,'form'])->name('brand.form');
            Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
            Route::get('/brand/view/{id}',[BrandController::class,'view'])->name('brand.view');
            Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
            

            //for order
            Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
            Route::get('/order/view/{id}',[OrderController::class,'view'])->name('order.view');

            //for vendor
            
            Route::get('/vendor/list',[VendorController::class,'list'])->name('vendor.list');
            Route::get('/vendor/form',[VendorController::class,'form'])->name('vendor.form');
            Route::post('/vendor/store',[VendorController::class,'store'])->name('vendor.store');

            //for admin
            Route::get('/admin/list',[UserController::class,'adminlist'])->name('admin.list');
            Route::get('/admin/form',[UserController::class,'adminform'])->name('admin.form');
            Route::post('/admin/store',[UserController::class,'adminstore'])->name('admin.store');

            //for customer
            Route::get('/customer/list',[UserController::class,'customerlist'])->name('customer.list');
            //for role
            Route::get('/role/list',[RoleController::class,'list'])->name('role.list');
            Route::get('/role/form',[RoleController::class,'form'])->name('role.form');
            Route::post('/role/store',[RoleController::class,'store'])->name('role.store');
            Route::get('/role/view/{id}',[RoleController::class,'view'])->name('role.view');
            Route::get('/role/delete/{id}',[RoleController::class,'delete'])->name('role.delete');
            Route::get('/role/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
            Route::put('/role/update/{id}',[RoleController::class,'update'])->name('role.update');

            //for permission
           Route::get('/permission/list',[PermissionController::class,'list'])->name('permission.list');
           Route::get('/permission/view/{id}',[PermissionController::class,'view'])->name('permission.view');
           Route::get('/permission/edit/{id}',[PermissionController::class,'edit'])->name('permission.edit');
           Route::put('/permission/update/{id}',[PermissionController::class,'update'])->name('permission.update');
            });
            });




});