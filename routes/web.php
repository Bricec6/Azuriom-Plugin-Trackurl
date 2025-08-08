<?php

use Azuriom\Plugin\Trackurl\Controllers\TrackurlController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your plugin. These
| routes are loaded by the RouteServiceProvider of your plugin within
| a group which contains the "web" middleware group and your plugin name
| as prefix. Now create something great!
|
*/

Route::get('/', [TrackurlController::class, 'index'])->name('index');
Route::get('/{shortCode}', [TrackurlController::class, 'redirect'])->name('redirect');
