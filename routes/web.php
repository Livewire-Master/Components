<?php

use App\Livewire\Assets as AssetsPage;
use App\Livewire\Clocks as ClocksPage;
use App\Livewire\Post\Index as PostsPage;
use App\Livewire\Todo\Index as TodoPage;
use App\Livewire\User\Profile as UserProfilePage;
use App\Livewire\Welcome as WelcomePage;
use App\Models\User;
use Carbon\Carbon;
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
Route::get('welcome/{email}', WelcomePage::class)->name('page.welcome');
Route::get('users/{user}', UserProfilePage::class)->name('page.user-profile');
Route::get('assets', AssetsPage::class)->name('page.assets');
Route::get('create-user', static function ()
{
    $time = time();

    $user = User::create(
        [
            'name'              => "User - $time",
            'email'             => "user$time@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password'          => 'secret',
        ]
    );

    dd($user);
});
