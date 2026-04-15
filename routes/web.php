<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('index');
});


// web.php yang rapi
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.detail');