<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComplainController;

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

// Route::get('/', function () {
//     return view('section.email.index');
// });

Route::get('/', function () {
    return view('section.dashboard.dashboard');
});

Route::controller(ComplainController::class)
    ->prefix('complain')
    ->group(function () {

        Route::get('/inbox', 'Inbox')->name('email.inbox');
        Route::get('/sent', 'Sent')->name('email.sent');
    });
