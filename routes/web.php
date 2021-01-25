<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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
// Route::get('/phpinfo', function(){
//     phpinfo();
// });
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/cs', function () {
    return view('contact');
});

Route::get('/insertProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);


Route::get('/insertCategory',[
    'uses'=>'CategoryController@create', 
    //uses will call the controller on create function
    'as'=>'category'
    // as is using on view 
]);

Route::post('/addCategory/store',[  // define your self
    'uses'=>'CategoryController@store',
    'as'=>'addCategory.store'    // check the charactor when you copy paste from PPT
]);

Route::post('/addProduct/store',[  // define your self
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'    // check the charactor when you copy paste from PPT
]);

Route::get('/allproduct',[
    'uses'=>'ProductController@show', 
    'as'=>'all.product'
]);

Route::get('/allproduct/delete/{id}',[
    'uses'=>'ProductController@delete', 
    'as'=>'delete.product'
]);

Route::get('/editproduct/{id}',[
    'uses'=>'ProductController@edit', 
    'as'=>'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);

Route::post('searchproduct', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('/products',[
    'uses'=>'productShow@showProducts', 
    'as'=>'products'
]);

Route::get('/products/{id}',[
    'uses'=>'productShow@showProductDetail', 
    'as'=>'product.detail'
]);

Route::post('/addToCart',[
    'uses'=>'CartController@add',
    'as'=>'add.to.cart'
]);

Route::get('/myCart',[
    'uses'=>'CartController@show', 
    'as'=>'my.cart'
]);

Route::get('/myCart/delete/{id}',[
    'uses'=>'CartController@delete', 
    'as'=>'delete.cart'
]);

Route::post('/createorder',[
    'uses'=>'OrderController@add',
    'as'=>'create.order'
]);

Route::get('/myorder',[
    'uses'=>'OrderController@show',
    'as'=>'my.order'
]);


Route::post('paypal', 'PaymentController@payWithpaypal');

Route::get('status', 'PaymentController@getPaymentStatus');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/update',"ProductController@update") ;


Route::post('store',[ProductController::class, 'store'])->name('store');

Route::post('get_all_products',[ProductController::class, 'GetProduct'] );
Route::post('categorystore',[CategoryController::class, 'storecategory'])->name('storeCategory');
Route::post('category-delete',[CategoryController::class, 'deleteCategory'])->name('category-delete');

Route::post('get_about',[AboutController::class, 'GetAbout'] );
Route::post('about_store',[AboutController::class, 'StoreAbout'] );

Route::get('/lay', [AdminController::class, 'viewApp1'])->name('admin-lay');
Route::get('/lay2', [AdminController::class, 'viewApp2'])->name('admin-lay2');
Route::get('/', [AdminController::class, 'viewIndex'])->name('cook-index');


Route::group([ 'middleware' => 'auth' ], function () {

Route::get('/admin', [AdminController::class, 'viewAdmin'])->name('admin-panel');
});