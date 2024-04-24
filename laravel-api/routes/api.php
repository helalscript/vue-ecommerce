
<?php
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponUsagesController;
use App\Http\Controllers\CuponsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('admin')->group(function(){
    Route::resource('users',UserController::class)->names('users');
    Route::resource('carts',CartsController::class)->names('carts');
    Route::resource('categorys',CategoryController::class)->names('categorys');
    Route::resource('cupons',CuponsController::class)->names('cupons');
    Route::resource('couponusages',CouponUsagesController::class)->names('couponusages');
    Route::resource('orderitems',OrderItemsController::class)->names('orderitems');
    Route::resource('orders',OrdersController::class)->names('orders');
    Route::resource('payments',PaymentsController::class)->names('payments');
    Route::resource('products',ProductsController::class)->names('products');
    Route::resource('purchases',PurchaseController::class)->names('purchases');
    Route::resource('roles',RoleController::class)->names('roles');
    Route::resource('shipments',ShipmentController::class)->names('shipments');
    Route::resource('subcategorys',SubCategoryController::class)->names('subcategorys');
    Route::resource('wishlists',WishlistController::class)->names('wishlists');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout'])->middleware('auth:sanctum');
