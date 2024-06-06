<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json(['message' => "Hello I'm live"]);
});

Route::get('/check-database-connection', [DatabaseController::class, 'checkConnection']);
