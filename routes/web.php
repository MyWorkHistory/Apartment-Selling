<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FreeguidesController;
use App\Http\Controllers\FastSearchController;

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

Route::get('/', [PagesController::class,'landing_page'])->name('landing_page');

Route::get('/en/about_us', [PagesController::class,'about_us'])->name('about_us');

Route::get('/en/agents/info', [PagesController::class,'about_agents'])->name('about_agents');

Route::get('/en/customer-service', [PagesController::class,'customer_service'])->name('customer-service');

Route::get('/en/veliko-tarnova', [PagesController::class,'about_veliko_tarnova'])->name('about_veliko_tarnova');

Route::get('/en/about-bulgaria', [PagesController::class,'about_bulgaria'])->name('about_bulgaria');

Route::get('/en/bulgaria-history', [PagesController::class,'bulgaria_history'])->name('bulgaria_history');

Route::get('/en/bulgarian-holidays', [PagesController::class,'bulgarian_holidays'])->name('bulgarian_holidays'); 

Route::get('/contact_us', [PagesController::class,'contact_us'])->name('contact_us');

Route::get('/faq', [PagesController::class,'faq'])->name('faq');


Route::get('/add_listing', [PagesController::class,'add_listing'])->name('add_listing');

Route::post('/do_advanced_search', [PagesController::class,'do_advanced_search']);

Route::get('/advanced-search-results/page/{page}',[PagesController::class,'advanced_search_results'])->name('advanced_search_results');


Route::get('/en/buy-bulgarian-property', [PagesController::class,'buy_bulgarian_property'])->name('buy_bulgarian_property');
Route::get('/en/sell-property-bulgaria', [PagesController::class,'sell_property_bulgaria'])->name('sell_property_bulgaria');
Route::get('/en/bulgarian-property-auctions', [PagesController::class,'bulgarian_property_auctions'])->name('bulgarian_property_auctions');


//guides

Route::get('/en/buying-property-bulgaria', [FreeguidesController::class,'buying_property_in_bulgaria'])->name('buying_property_in_bulgaria');
Route::get('/en/selling-property-bulgaria', [FreeguidesController::class,'selling_property_bulgaria'])->name('selling_property_bulgaria');
Route::get('/en/move-to-bulgaria', [FreeguidesController::class,'move_to_bulgaria'])->name('move_to_bulgaria');
Route::get('/en/bulgarian-pets', [FreeguidesController::class,'bulgarian_pets'])->name('bulgarian_pets');
Route::get('/en/bulgarian-visas', [FreeguidesController::class,'bulgarian_visas'])->name('bulgarian_visas');
Route::get('/en/health-in-bulgaria', [FreeguidesController::class,'health_in_bulgaria'])->name('health_in_bulgaria');
Route::get('/en/bulgaria-services', [FreeguidesController::class,'bulgaria_services'])->name('bulgaria_services');
Route::get('/en/school-in-vt', [FreeguidesController::class,'school_in_vt'])->name('school_in_vt');
Route::get('/en/bulgarian-language', [FreeguidesController::class,'bulgarian_language'])->name('bulgarian_language');

Route::get('/en/property-details/id/{id}', [PagesController::class,'propdetails'])->name('propdetails');
Route::get('/en/property-lisiting/page/{page}', [PagesController::class,'listing'])->name('listing');


Route::get('/en/terms_and_conditions', [PagesController::class,'terms_and_conditions'])->name('terms');
Route::get('/en/policy', [PagesController::class,'policy'])->name('policy');

Route::post('reload_search', [PagesController::class,'reload_search'])->name('reload_search(');


Route::get('en/fast-search-results/{query}/{page}', [FastSearchController::class,'fastsearch'])->name('fast-search');

