<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    return view('index-page');
});

// USERS

Route::get('/users', [UserController::class, "index"])->name("users.index");
Route::get('/users-list', [UserController::class, "userList"])->name("list.users");
Route::get("user-edit", [UserController::class, "edit"])->name("edit.users");

//AUTH

Auth::routes();

//DASHBOARD

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/charts', [DashboardController::class, "showChartsPage"])->name("charts");
Route::get("/users", [DashboardController::class, "showUsersPage"])->name("users");
Route::get("/profile", [DashboardController::class, "showProfilePage"])->name("profile");
Route::get("/email", [DashboardController::class, "showEmailPage"])->name("email");
Route::get("/file-manager", [DashboardController::class, "showFileManagerPage"])->name("file-manager");
Route::get("/bank", [DashboardController::class, "showBankPage"])->name("bank");
Route::get("/pay", [DashboardController::class, "showPayPage"])->name("pay");
Route::get("/chat", [DashboardController::class, "showChatPage"])->name("chat");
Route::get("/blog", [DashboardController::class, "showBlogPage"])->name("blog");
Route::get("/notes", [DashboardController::class, "showNotesPage"])->name("notes");
