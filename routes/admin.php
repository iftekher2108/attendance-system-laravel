<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::get('/dashboard', function () {
    $user = Auth::user();
    $users = User::orderBy('id','desc')->get();
    return Inertia::render('Dashboard',compact('user','users'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::post('profile/picture/update',[ProfileController::class,'picture_update'])->name('picture.update');
    Route::delete('user/delete/{id}',[ProfileController::class,'user_delete'])->name('user.delete');
    Route::post('user-data',[ProfileController::class,'user_data'])->name('user.data');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


