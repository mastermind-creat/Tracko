<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Example API route
Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
}); 