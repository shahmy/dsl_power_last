<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoadItemController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\PartnerPageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\HomeAboutSectionController;
use App\Http\Controllers\ApplianceCategoryController; */

use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about-us', [SiteController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [SiteController::class, 'contactUs'])->name('contact-us');
Route::get('/partners', [SiteController::class, 'partners'])->name('partners');
Route::get('/packages', [SiteController::class, 'packages'])->name('packages');
Route::get('/leaderships', [SiteController::class, 'leadership'])->name('leaderships');
Route::get('/single-package/{id}/{slug}', [SiteController::class, 'singlePackage'])->name('single-package');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/single-blog/{id}/{slug}', [SiteController::class, 'singleBlog'])->name('single-blog');

Route::get('/list-category-products/{cat_id}/{slug}', [SiteController::class, 'listProductsBasedCategory'])->name('list.category.products');

Route::get('/show-single-product/{product_id}/{slug}', [SiteController::class, 'showSingleProductDetail'])->name('show.single.product');

Route::post('/load-application-items', [SiteController::class, 'loadAppItems'])->name('load.application.items');

Route::post('/submit-custom-quote', [SiteController::class, 'submitCustomQuote'])->name('submit.custom.quote');

Route::get('/customer-payment', [SiteController::class, 'customer_payment'])->name('customer.payment');
Route::post('/search-customer-payment', [SiteController::class, 'search_customer_payment'])->name('search.customer.payment');

Route::get('/cutomer-payment-return',[SiteController::class, 'customer_payment_return'])->name('cutomer.payment.return');


Route::get('/link-storage', function() {
    Artisan::call('storage:link');
   echo 'storage linked';
});


Route::get('/symlink', function () {
    $target =$_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
    $link = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
    symlink($target, $link);
    echo "Done";
 });

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('users', UserController::class);
        Route::resource('partners', PartnerController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource(
            'appliance-categories',
            ApplianceCategoryController::class
        );
        Route::resource('categories', CategoryController::class);
        Route::resource('home-sliders', HomeSliderController::class);
        Route::resource('about-pages', AboutPageController::class);
        Route::resource('blog-pages', BlogPageController::class);
        Route::resource('contact-pages', ContactPageController::class);
        Route::resource(
            'home-about-sections',
            HomeAboutSectionController::class
        );
        Route::resource('home-pages', HomePageController::class);
        Route::resource('posts', PostController::class);
        Route::resource('tags', TagController::class);
        Route::resource('load-items', LoadItemController::class);
        Route::resource('packages', PackageController::class);
        Route::resource('products', ProductController::class);
        Route::resource('product-categories', ProductCategoryController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('partner-pages', PartnerPageController::class);
        Route::resource('galleries', GalleryController::class);
    }); */
