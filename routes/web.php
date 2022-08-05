<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RestController;
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

//static pages
Route::get('/', [PageController::class, 'viewWelcomePage'])->name("mainPage");
Route::get('/home', [PageController::class, 'viewHomePage'])->name("home");
Route::get('/cbdc', [PageController::class, "viewCbdsPage"])->name('cbds');
Route::get('/defiuniverse', [PageController::class, "viewDefiuniversePage"])->name('defiuniverse');
Route::get('/about-us', [PageController::class, "viewAboutusPage"])->name('aboutUs');
Route::get('/team', [PageController::class, "viewTeamPage"])->name('team');
Route::get('/careers', [PageController::class, "viewCareersPage"])->name('careers');
Route::get('/authentication', [PageController::class, "viewAuthenticationPage"])->name('authentication');
Route::get('/policy', [PageController::class, "viewPolicyPage"])->name('policy');
Route::get('/faqs', [PageController::class, "viewFaqsPage"])->name('faqs');


//explorer
Route::get('/explorer', [PageController::class, "viewExplorerPage"])->name('explorer');
Route::get('/thirtyTransactions', [RestController::class, "getTwentyRecords"])->name('thirtyTransactions');
Route::get('/explorerAll', [PageController::class, "viewExplorerAllPage"])->name('explorerAll');
Route::get('/explorerDetails', [PageController::class, "viewExplorerDetailsPage"])->name('explorerDetails');
Route::get('/transactions/paginate', [RestController::class, "paginateTransactions"])->name('paginateTransactions');

// login controller
Route::post('/login-call', [LoginController::class, "login"])->name('login');
Route::get('/logout', [LoginController::class, "logout"])->name('logout');
