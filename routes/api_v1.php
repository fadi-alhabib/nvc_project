<?php

use App\Http\Controllers\Api\V1\StoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::post('stories/create', [StoryController::class, 'create']);
// Route::put('stories/update/{id}', [StoryController::class, 'update']);
// Route::get('stories/get/{id}', [StoryController::class, 'find']);
// Route::get('stories/all', [StoryController::class, 'all']);
// Route::delete('stories/delete/{id}', [StoryController::class, 'delete']);

Route::resource('stories', StoryController::class);