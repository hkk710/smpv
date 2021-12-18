<?php

use App\Http\Controllers\CareerResourceController;
use App\Http\Controllers\ArticleResourceController;
use App\Http\Controllers\StatutoryResourceController;
use App\Http\Controllers\WelcomePublicController;
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

Route::get('/', [WelcomePublicController::class, 'index']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/test1', function () {
    return view('admin.test1.index');
});

// Route::group([
//     'namespace' => '',
//     'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
//     'prefix' => config('backpack.base.route_prefix', 'admin'),
//     ]
    
    
// );


Route::resources([
    'career' => CareerResourceController::class,
    'article' => ArticleResourceController::class,
    'statutory' => StatutoryResourceController::class,
]);
// Route::get('/{slug}', [WelcomePublicController::class, 'show']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin/dashboard/index');
// })->name('dashboard');
