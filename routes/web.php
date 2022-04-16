<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\User\UserComponent;

use App\Http\Livewire\Admin\AdminComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AddNewProductComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditProduct;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeCategoriesComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\ThankyouComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/contactUs', ContactUsComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/wishlist',WishlistComponent::class)->name('product.wishlist');
Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



// User Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserComponent::class)->name('user.dashboard');

});

// Admin routes
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // admin show dashboard
   Route::get('/admin/dashboard',AdminComponent::class)->name('admin.dashboard');
//    admin categories
   Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
   Route::get('/admin/category/Add',AdminAddCategoryComponent::class)->name('admin.Add');
   Route::get('/admin/category/Edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.Edit');
//    admin products
   Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
   Route::get('/admin/product/add',AddNewProductComponent::class)->name('admin.Addproduct');
   Route::get('/admin/product/EditProduct/{product_slug}',AdminEditProduct::class)->name('admin.editproduct');
//    admin HomeSlider
   Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.homeslider');
   Route::get('/admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
   Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

   Route::get('/admin/home-categories',AdminHomeCategoriesComponent::class)->name('admin.homecategories');

   Route::get('/admin/sale',AdminSaleComponent::class)->name('admin.sale');
   //coupons
   Route::get('/admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
   Route::get('/admin/coupon/add',AdminAddCouponComponent::class)->name('admin.addcoupon');
   Route::get('/admin/coupon/edit/{coupon_id}',AdminEditCouponComponent::class)->name('admin.editcoupon');
});

