<?php

use Illuminate\Support\Facades\Route;

// Website Controllers
use App\Http\Controllers\Website;

Route::middleware(['underc'])->group(function () {
  Route::get('/', [Website\HomeController::class, 'get'])->name(
    'website.home.get',
  );
});
