<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('error',[App\Http\Controllers\ErrorControllers::class,'index'])->name('show_error');
Route::post('success',[App\Http\Controllers\SuccessControllers::class],'index')->name('success');
Route::get('login',[App\Http\Controllers\AdminLoginControllers::class,'index']);
Route::get('add_new_user',[App\Http\Controllers\UserAddInputFieldController::class,'index']);
Route::post('logged/in',[App\Http\Controllers\AdminLoginAuthenticationController::class,'loginAuth'])->name('login_details');
Route::get('admin_dashboard',[App\Http\Controllers\AdminDashboardControllers::class,'index'])->name('admin_dashboard');
Route::match(['GET','POST'],'storing/user/info',[App\Http\Controllers\UserInputFieldControllers::class,'store'])->name('adding_new_user');
Route::get('click/',[App\Http\Controllers\ClickedControllers::class,'index'])->name('clicked_here');
Route::get('view/user/table',[App\Http\Controllers\UsersTableControllers::class,'index'])->name('view_user_details');
Route::get('view/users/table/view',[App\Http\Controllers\UsersTableViewControllers::class,'index']);
Route::get('users/dashboard',[App\Http\Controllers\UserDashboardController::class,'index'])->name('user_dashboard');
Route::get('users/input/{id}',[App\Http\Controllers\DepositInputController::class,'index'])->name('deposit_amount_input');
Route::post('deposited',[App\Http\Controllers\DepositingAmountController::class,'store'])->name('depositing');
Route::get('withdrawing/{id}',[App\Http\Controllers\UserWithdrawingController::class,'index'])->name('user-withdrawing-amount');
Route::post('withdrawing/from/Account',[App\Http\Controllers\UserWithdrawingFromAccountController::class,'store'])->name('withdrawing-amount-from-account');
Route::get('current/balance/user/account/{id}',[App\Http\Controllers\UserAccountCurrentBalanceController::class,'show'])->name('user_viewing_current_balance');
Route::get('transaction/history/user/{id}',[App\Http\Controllers\UserTransactionHistoryController::class,'index'])->name('show-transaction-history-to-user');
Route::get('admin/searching/account',[App\Http\Controllers\AdminSearchingAccountController::class,'index'])->name('admin_searching_account');
Route::post('admin/posting/search/account',[App\Http\Controllers\AdminSearchAccountControllers::class,'index'])->name('admin_posting_search_data');


