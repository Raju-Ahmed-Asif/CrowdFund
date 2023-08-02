<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CrisisController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\Expense_categoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\ExpenseController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


//frontend
 Route::get('/volunteerLogin',[HomeController::class,'login'])->name('volunteer.login');
 Route::post('/login-match',[HomeController::class,'login_match'])->name('login_match');
 Route::get('/registration-form',[HomeController::class,'registration'])->name('registration');
 Route::post('/registration-store',[HomeController::class,'registration_store'])->name('registration.store');


 Route::get('/',[HomeController::class,'homepage'])->name('homepage');







Route::get('/login-form',[AuthController::class,'login'])->name('login');
Route::post('/do-login',[AuthController::class,'do_login'])->name('do.login');




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/index',[CrisisController::class,'index'])->name('index.crisis');
Route::get('/create',[CrisisController::class,'create'])->name('create.crisis');
Route::post('/store',[CrisisController::class,'store'])->name('store.crisis');
Route::get('/expense_cat_index',[Expense_categoryController::class,'index'])->name('index.expense_categories');
Route::get('/createe',[Expense_categoryController::class,'create'])->name('create.expense_categories');
Route::post('/expense_store',[Expense_categoryController::class,'store'])->name('store.expense_category');
Route::get('/donation',[DonationController::class,'index_donation'])->name('index.donation');
Route::get('/donor_index',[DonorController::class,'index_donor'])->name('index.donor');
Route::get('/donor_create',[DonorController::class,'create_donor'])->name('create.donor');
Route::post('/donor_store',[DonorController::class,'store_donor'])->name('store.donor');
Route::get('/volunteer_index',[VolunteerController::class,'index_volunteer'])->name('index.volunteer');
Route::get('/volunteer_create',[VolunteerController::class,'create_volunteer'])->name('create.volunteer');
Route::post('/volunteer_store',[VolunteerController::class,'store_volunteer'])->name('store.volunteer');
Route::get('/expense_index',[ExpenseController::class,'index_expense'])->name('index.expense');
Route::get('/expense_create',[ExpenseController::class,'create_expense'])->name('create.expense');
Route::post('/expense_store',[ExpenseController::class,'store_expense'])->name('store.expense');

//Report Crisis
Route::get('/crisis-report',[CrisisController::class,'crisis_report'])->name('crisis.report');
Route::get('/crisis-search',[CrisisController::class,'crisis_search'])->name('crisis.search');

//Report Donor

Route::get('/donor-report',[DonorController::class,'donor_report'])->name('donor.report');


});
