<?php

use App\Livewire\Clocks as ClocksPage;
use App\Livewire\Post\Index as PostsPage;
use App\Livewire\Todo\Index as TodoPage;
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

Route::get('clocks', ClocksPage::class)->name('page.clocks');
Route::get('posts', PostsPage::class)->name('page.posts');
Route::get('todo', TodoPage::class)->name('page.todo');
