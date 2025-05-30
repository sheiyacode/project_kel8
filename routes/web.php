<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginTutorController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UsersRegisterController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

//Route::get('/', function () {
    //return view(view: 'user.index');});
Route::get('/', [IndexController::class, 'index'])->name('index');

//Route untuk register user
Route::get('/register', [UsersRegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [UsersRegisterController::class, 'register'])->name('register.submit');

//Dashboard user
Route::get('/login', function () {
    return view('pilih-role-login');
})->name('login.form');

//Route untuk login 
Route::get('/login/user', [LoginUserController::class, 'showLoginFormUser'])->name('login.user');
Route::post('/login/user', [LoginUserController::class, 'login'])->name('login.user.submit');

Route::get('/login/tutor', [LoginTutorController::class, 'showLoginFormTutor'])->name('login.tutor');
Route::post('/login/tutor', [LoginTutorController::class, 'login'])->name('login.tutor.submit');

//Dashboard untuk user
//Route::get('/dashboard/user', function () {
    //return view('user.dashboard');
//})->middleware('auth')->name('dashboarduser');
Route::middleware('auth')->prefix('dashboard/user')->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('dashboarduser.index');
    Route::get('/courses', [UserController::class, 'courses'])->name('dashboarduser.courses');
    Route::get('/my-courses', [UserController::class, 'myCourses'])->name('dashboarduser.mycourses');
    Route::get('/course-progress', [UserController::class, 'Progress'])->name('dashboarduser.progress');
    Route::get('/quiz', [UserController::class, 'quiz'])->name('dashboarduser.quiz');
    Route::get('/certificate', [UserController::class, 'certificate'])->name('dashboarduser.certificate');
    Route::get('/profile', [UserController::class, 'profile'])->name('dashboarduser.profile');
    //Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');
});
//Route untuk transaksi
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/payment/{token}', [CheckoutController::class, 'payment'])->name('checkout.payment');

Route::post('user/checkout', [TransactionController::class, 'checkout'])->name('checkout');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/midtrans/notification', [TransactionController::class, 'notification'])->name('midtrans.notification');

Route::post('/midtrans/callback', [WebhookController::class, 'handle']);

//Route untuk logout
Route::post('/dashboard', function () {
    Auth::logout();
    return redirect()->route('index'); // arahkan kembali ke landing page
})->name('dashboarduser.logout');

//Untuk quiz
Route::resource('quizzes', QuizController::class);

//Dashboard untuk tutor
Route::get('/dashboard/tutor', function () {
    return view('tutor.dashboard');
})->middleware('auth')->name('dashboardtutor');

//Dashboard untuk admin
Route::get('/admin',function(){
    return view('admin.dashboard');
})->middleware('auth')->name('dashboardadmin');

//Search
Route::get('/search',[SearchController::class, 'index'])->name('search');
