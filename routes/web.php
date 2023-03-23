
<?php

use App\Http\Controllers\ChartsController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\TableCollectionController;
use App\Http\Controllers\TableGalleryController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/gallery', [GalleryController::class, 'gallery']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/collection', [CollectionController::class, 'collection']);
Route::get('/dashboard', [DashboardContoller::class, 'dashboard']);
Route::get('/charts', [ChartsController::class, 'charts']);
Route::get('/table-collection', [TableCollectionController::class, 'tbCollection']);
Route::get('/table-gallery', [TableGalleryController::class, 'tbGallery']);


