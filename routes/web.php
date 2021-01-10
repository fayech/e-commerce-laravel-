<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\SliderController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Admin',[AdminController::class,'index']);
Route::get('/client',[AdminController::class,'client']);
Route::get('/sigin',[AdminController::class,'sigin']);
Route::post('/sigin',[AdminController::class,'login']);

Route::get('Marque-list', [MarqueController::class, 'Marque'])->name('Marque-list');
Route::get('Marque-list/{id}', [MarqueController::class, 'editMarque']);
Route::post('Marque-list/AdDD', [MarqueController::class, 'storeMarque'])->name('marque.store');
Route::post('Marque-list/delete', [MarqueController::class, 'deleteMarque'])->name('marque.delete');
Route::post('Marque-list/update', [MarqueController::class, 'updateMarque'])->name('marque.update');

//Article
Route::get('Article-list', [ArticleController::class, 'Article'])->name('Article-list');
Route::get('list-Article/{id}', [ArticleController::class, 'editArticle']);
Route::post('Article-list/AdDD', [ArticleController::class, 'storeArticle'])->name('article.store');
Route::post('Article-list/delete', [ArticleController::class, 'deleteArticle'])->name('article.delete');
Route::post('Article-list/update', [ArticleController::class, 'updateArticle'])->name('article.update');
//end-Article

//sLIDER
Route::get('Slider-list', [SliderController::class, 'Slider'])->name('Slider-list');
Route::get('Slider-list/{id}', [SliderController::class, 'editSlider']);
Route::post('Slider-list/AdDD', [SliderController::class, 'storeSlider'])->name('slider.store');
Route::post('Slider-list/delete', [SliderController::class, 'deleteSlider'])->name('slider.delete');
Route::post('Slider-list/update', [SliderController::class, 'updateSlider'])->name('slider.update');
//end-Slider

//client
Route::get('compte', [ClientController::class, 'compte']);
Route::get('cart', [ClientController::class, 'cart']);
Route::get('slide', [ClientController::class, 'slide']);
Route::get('contact', [HomeController::class, 'contact']);


//end-clients
Route::get('Article/{id}', [ArticleController::class, 'index']);
Route::get('Article', [ArticleController::class, 'Articles']);

Route::get('article-list/{id}', [ArticleController::class, 'detailArticle']);

Route::get('add-to-cart/{id}', [CartController::class,'addToCart']);

Route::get('pdf', [CartController::class,'pdf']);
Route::get('article/pdf', [CartController::class, 'download']);

Route::patch('update-cart', [CartController::class,'update']);
Route::delete('remove-from-cart', [CartController::class,'remove']);
Route::resource('Categorie',CategorieController::class);
Route::resource('Marque',MarqueController::class);





