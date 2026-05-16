<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\BusinessForm;
use App\Livewire\ExpoForm;
use App\Livewire\Livewire\AboutComponent;
use App\Livewire\Livewire\ExhibitorComponent;
use App\Livewire\Livewire\HighlightComponent;
use App\Livewire\Livewire\MediaComponent;
use App\Livewire\Livewire\VisitorComponent;

Route::view('/', 'welcome');

Route::get('/the_event/{board}', AboutComponent::class)->name('event.intro');
Route::get('/visitor/{board}', VisitorComponent::class)->name('visitor.details');
Route::get('/exhibitor/{board}', ExhibitorComponent::class)->name('exhibitor.service');
Route::get('/key_highlights/{board}', HighlightComponent::class)->name('hightlights.promo');
Route::get('/media_centre/{board}', MediaComponent::class)->name('media.advertise');

Route::get('/exhibitor', Businessform::class)->name('form.lead');
Route::get('/detailo', ExpoForm::class)->name('form.exhibitor');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});