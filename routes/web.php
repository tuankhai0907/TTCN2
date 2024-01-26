<?php
use App\Http\Controllers\CauthuController;
use App\Http\Controllers\QlbongdaController;
use App\Http\Controllers\AuthController;

// Route đội bóng
Route::get('/qlbongda', [QlbongdaController::class, 'index'])->name('qlbongda.index');
Route::get('/qlbongda/create', [QlbongdaController::class, 'create'])->name('qlbongda.create');
Route::post('/qlbongda', [QlbongdaController::class, 'store'])->name('qlbongda.store');
Route::get('/qlbongda/{id}/edit', [QlbongdaController::class, 'edit'])->name('qlbongda.edit');
Route::put('/qlbongda/{id}', [QlbongdaController::class, 'update'])->name('qlbongda.update');
Route::delete('/qlbongda/{id}', [QlbongdaController::class, 'destroy'])->name('qlbongda.destroy');
Route::get('/qlbongda/search', [QlbongdaController::class, 'search'])->name('qlbongda.search');

// Route cầu thủ
Route::get('/cauthu', [CauthuController::class, 'index'])->name('cauthu.index');
Route::get('/cauthu/create', [CauthuController::class, 'create'])->name('cauthu.create');
Route::post('/cauthu', [CauthuController::class, 'store'])->name('cauthu.store');
Route::get('/cauthu/{id}/edit', [CauthuController::class, 'edit'])->name('cauthu.edit');
Route::put('/cauthu/{id}', [CauthuController::class, 'update'])->name('cauthu.update');
Route::delete('/cauthu/{id}', [CauthuController::class, 'destroy'])->name('cauthu.destroy');
Route::get('/cauthu/search', [CauthuController::class, 'search'])->name('cauthu.search');

//router login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::fallback(function () {
    abort(404);
});