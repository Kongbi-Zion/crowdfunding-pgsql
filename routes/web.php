<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PaymentController;
use App\Models\Donation;

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

// Index routes
Route::get('/', function () {
    return view('welcome');
});

// Donation routes
Route::middleware(['auth'])->group(function () {
    Route::resource('donations', DonationController::class)->except(['index', 'show']);
});
Route::resource('donations', DonationController::class)->only(['index', 'show']);

// Payment routes
Route::get('/payment/{donationId}', function ($donationId) {
    $donation = Donation::find($donationId);
    return view('payments.create',compact('donation'));
})->middleware(['auth'])->name('payment.donate');

Route::post('/payment', [PaymentController::class, 'store'])->name('payment.create');
Route::resource('payments', PaymentController::class); 


// User routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
