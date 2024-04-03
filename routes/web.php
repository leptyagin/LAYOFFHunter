<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Client\Home\IndexController::class)->name('client.home.index');

//client side
Route::group(['prefix' => 'vacancies'], function () {
    Route::get('/', \App\Http\Controllers\Client\Vacancy\IndexController::class)->name('client.vacancy.index');
    Route::get('/{vacancy}', \App\Http\Controllers\Client\Vacancy\ShowController::class)->name('client.vacancy.show');
});

Route::group(['prefix' => 'account', 'middleware'=> 'auth'], function () {
    Route::get('/', \App\Http\Controllers\Account\IndexController::class)->name('account.index');

    Route::group(['prefix' => 'vacancies'], function () {
        Route::get('/', \App\Http\Controllers\Account\Vacancy\IndexController::class)->name('account.vacancy.index');
        Route::get('/create', \App\Http\Controllers\Account\Vacancy\CreateController::class)->name('account.vacancy.create');
        Route::post('/', \App\Http\Controllers\Account\Vacancy\StoreController::class)->name('account.vacancy.store');
        Route::get('/{vacancy}', \App\Http\Controllers\Account\Vacancy\ShowController::class)->name('account.vacancy.show');
        Route::get('/{vacancy}/edit', \App\Http\Controllers\Account\Vacancy\EditController::class)->name('account.vacancy.edit');
        Route::patch('/{vacancy}', \App\Http\Controllers\Account\Vacancy\UpdateController::class)->name('account.vacancy.update');
        Route::delete('/{vacancy}', \App\Http\Controllers\Account\Vacancy\DeleteController::class)->name('account.vacancy.delete');
    });
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
