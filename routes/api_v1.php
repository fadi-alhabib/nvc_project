<?php

use App\Http\Controllers\Api\V1\StoryController;
use Illuminate\Support\Facades\Route;



// Route::post('stories/create', [StoryController::class, 'create']);
// Route::put('stories/update/{id}', [StoryController::class, 'update']);
// Route::get('stories/get/{id}', [StoryController::class, 'find']);
// Route::get('stories/all', [StoryController::class, 'all']);
// Route::delete('stories/delete/{id}', [StoryController::class, 'delete']);

Route::resource('stories', StoryController::class);
// create => GET
// index => GET
// show => GET
// destroy => DELETE
// update => PUT