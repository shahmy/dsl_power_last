<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\PackageController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\BlogPageController;
use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\PostTagsController;
use App\Http\Controllers\Api\TagPostsController;
use App\Http\Controllers\Api\LoadItemController;
use App\Http\Controllers\Api\AboutPageController;
use App\Http\Controllers\Api\HomeSliderController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\ContactPageController;
use App\Http\Controllers\Api\PartnerPageController;
use App\Http\Controllers\Api\CategoryPostsController;
use App\Http\Controllers\Api\PostGalleriesController;
use App\Http\Controllers\Api\GalleryVideosController;
use App\Http\Controllers\Api\GalleryPhotosController;
use App\Http\Controllers\Api\PostCategoriesController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\HomeAboutSectionController;
use App\Http\Controllers\Api\ProductGalleriesController;
use App\Http\Controllers\Api\ProjectGalleriesController;
use App\Http\Controllers\Api\ApplianceCategoryController;
use App\Http\Controllers\Api\ProductCategoryProductsController;
use App\Http\Controllers\Api\ApplianceCategoryLoadItemsController;

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

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('users', UserController::class);

        Route::apiResource('partners', PartnerController::class);

        Route::apiResource('testimonials', TestimonialController::class);

        Route::apiResource(
            'appliance-categories',
            ApplianceCategoryController::class
        );

        // ApplianceCategory Load Items
        Route::get('/appliance-categories/{applianceCategory}/load-items', [
            ApplianceCategoryLoadItemsController::class,
            'index',
        ])->name('appliance-categories.load-items.index');
        Route::post('/appliance-categories/{applianceCategory}/load-items', [
            ApplianceCategoryLoadItemsController::class,
            'store',
        ])->name('appliance-categories.load-items.store');

        Route::apiResource('categories', CategoryController::class);

        // Category Posts
        Route::get('/categories/{category}/posts', [
            CategoryPostsController::class,
            'index',
        ])->name('categories.posts.index');
        Route::post('/categories/{category}/posts/{post}', [
            CategoryPostsController::class,
            'store',
        ])->name('categories.posts.store');
        Route::delete('/categories/{category}/posts/{post}', [
            CategoryPostsController::class,
            'destroy',
        ])->name('categories.posts.destroy');

        Route::apiResource('home-sliders', HomeSliderController::class);

        Route::apiResource('about-pages', AboutPageController::class);

        Route::apiResource('blog-pages', BlogPageController::class);

        Route::apiResource('contact-pages', ContactPageController::class);

        Route::apiResource(
            'home-about-sections',
            HomeAboutSectionController::class
        );

        Route::apiResource('home-pages', HomePageController::class);

        Route::apiResource('posts', PostController::class);

        // Post Galleries
        Route::get('/posts/{post}/galleries', [
            PostGalleriesController::class,
            'index',
        ])->name('posts.galleries.index');
        Route::post('/posts/{post}/galleries', [
            PostGalleriesController::class,
            'store',
        ])->name('posts.galleries.store');

        // Post Tags
        Route::get('/posts/{post}/tags', [
            PostTagsController::class,
            'index',
        ])->name('posts.tags.index');
        Route::post('/posts/{post}/tags/{tag}', [
            PostTagsController::class,
            'store',
        ])->name('posts.tags.store');
        Route::delete('/posts/{post}/tags/{tag}', [
            PostTagsController::class,
            'destroy',
        ])->name('posts.tags.destroy');

        // Post Categories
        Route::get('/posts/{post}/categories', [
            PostCategoriesController::class,
            'index',
        ])->name('posts.categories.index');
        Route::post('/posts/{post}/categories/{category}', [
            PostCategoriesController::class,
            'store',
        ])->name('posts.categories.store');
        Route::delete('/posts/{post}/categories/{category}', [
            PostCategoriesController::class,
            'destroy',
        ])->name('posts.categories.destroy');

        Route::apiResource('tags', TagController::class);

        // Tag Posts
        Route::get('/tags/{tag}/posts', [
            TagPostsController::class,
            'index',
        ])->name('tags.posts.index');
        Route::post('/tags/{tag}/posts/{post}', [
            TagPostsController::class,
            'store',
        ])->name('tags.posts.store');
        Route::delete('/tags/{tag}/posts/{post}', [
            TagPostsController::class,
            'destroy',
        ])->name('tags.posts.destroy');

        Route::apiResource('load-items', LoadItemController::class);

        Route::apiResource('packages', PackageController::class);

        Route::apiResource('products', ProductController::class);

        // Product Galleries
        Route::get('/products/{product}/galleries', [
            ProductGalleriesController::class,
            'index',
        ])->name('products.galleries.index');
        Route::post('/products/{product}/galleries', [
            ProductGalleriesController::class,
            'store',
        ])->name('products.galleries.store');

        Route::apiResource(
            'product-categories',
            ProductCategoryController::class
        );

        // ProductCategory Products
        Route::get('/product-categories/{productCategory}/products', [
            ProductCategoryProductsController::class,
            'index',
        ])->name('product-categories.products.index');
        Route::post('/product-categories/{productCategory}/products', [
            ProductCategoryProductsController::class,
            'store',
        ])->name('product-categories.products.store');

        Route::apiResource('projects', ProjectController::class);

        // Project Galleries
        Route::get('/projects/{project}/galleries', [
            ProjectGalleriesController::class,
            'index',
        ])->name('projects.galleries.index');
        Route::post('/projects/{project}/galleries', [
            ProjectGalleriesController::class,
            'store',
        ])->name('projects.galleries.store');

        Route::apiResource('partner-pages', PartnerPageController::class);

        Route::apiResource('galleries', GalleryController::class);

        // Gallery Videos
        Route::get('/galleries/{gallery}/videos', [
            GalleryVideosController::class,
            'index',
        ])->name('galleries.videos.index');
        Route::post('/galleries/{gallery}/videos', [
            GalleryVideosController::class,
            'store',
        ])->name('galleries.videos.store');

        // Gallery Photos
        Route::get('/galleries/{gallery}/photos', [
            GalleryPhotosController::class,
            'index',
        ])->name('galleries.photos.index');
        Route::post('/galleries/{gallery}/photos', [
            GalleryPhotosController::class,
            'store',
        ])->name('galleries.photos.store');
    });
