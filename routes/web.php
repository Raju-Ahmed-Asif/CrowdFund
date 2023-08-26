<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactCotroller;
use App\Http\Controllers\CrisisCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CrisisController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\Expense_categoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\ExpenseController;
use App\Models\CrisisCategory;

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

 Route::get('/frontend-crisis',[CrisisController::class,'frontend_crisis'])->name('frontend.crisis');
 Route::get('/crisis-details/{id}',[CrisisController::class,'crisis_details'])->name('crisis.details');

 //Donate
 Route::get('/',[HomeController::class,'homepage'])->name('homepage');
 Route::get('donate-form/{crisisId}',[DonateController::class,'donateForm'])->name('donate.form');
 Route::post('donate-store',[DonateController::class,'donatestore'])->name('donate.store');

 Route::get('contactUs',[ContactCotroller::class,'contactUs'])->name('contact.us');







Route::get('/login-form',[AuthController::class,'login'])->name('login');
Route::post('/do-login',[AuthController::class,'do_login'])->name('do.login');




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
//Expense category

Route::get('/expense_cat_index',[Expense_categoryController::class,'index'])->name('index.expense_categories');
Route::get('/expense_cat_createe',[Expense_categoryController::class,'create'])->name('create.expense_categories');
Route::post('/expense_cat_storee',[Expense_categoryController::class,'store'])->name('store.expense_category');
Route::get('/expense_cat-edit/{id}',[Expense_categoryController::class,'expense_cat_edit'])->name('expense_cat.edit');
Route::post('/expense_cat-update/{id}',[Expense_categoryController::class,'expense_category_update'])->name('update.expense_category');

Route::get('/donation',[DonationController::class,'index_donation'])->name('index.donation');
Route::get('/donor_index',[DonorController::class,'index_donor'])->name('index.donor');
Route::get('/donor_create',[DonorController::class,'create_donor'])->name('create.donor');
Route::post('/donor_store',[DonorController::class,'store_donor'])->name('store.donor');

//Volunteer controller
Route::get('/volunteer_index',[VolunteerController::class,'index'])->name('index.volunteer');


//CrisisCategory
Route::get('/crisis-category-index',[CrisisCategoryController::class,'index'])->name('category.index');
Route::get('/crisis-category-create',[CrisisCategoryController::class,'create'])->name('category.create');
Route::post('/crisis-category-store',[CrisisCategoryController::class,'store'])->name('category.store');

//Crisis Controller
Route::get('/index',[CrisisController::class,'index'])->name('index.crisis');
Route::get('/create',[CrisisController::class,'create'])->name('create.crisis');
Route::post('/store',[CrisisController::class,'store'])->name('store.crisis');
Route::get('/crisis-delete/{id}',[CrisisController::class,'crisis_delete'])->name('crisis.delete');
Route::get('/crisis-edit/{id}',[CrisisController::class,'crisis_edit'])->name('crisis.edit');
Route::post('/crisis-update/{id}',[CrisisController::class,'crisis_update'])->name('update.crisis');




//expense controller
Route::get('/expense_index',[ExpenseController::class,'index_expense'])->name('index.expense');
Route::get('/expense_create',[ExpenseController::class,'create_expense'])->name('create.expense');
Route::post('/expense_store',[ExpenseController::class,'store_expense'])->name('store.expense');
Route::get('/expense-edit/{id}',[ExpenseController::class,'expense_edit'])->name('expense.edit');
Route::post('/expense-update/{id}',[ExpenseController::class,'expense_update'])->name('update.expense');

//Report Crisis
Route::get('/crisis-report',[CrisisController::class,'crisis_report'])->name('crisis.report');
Route::get('/crisis-search',[CrisisController::class,'crisis_search'])->name('crisis.search');

//Report Donor

Route::get('/donor-report',[DonorController::class,'donor_report'])->name('donor.report');


});
