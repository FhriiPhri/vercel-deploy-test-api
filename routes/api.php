<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'laravel-api',
        'time' => now()->toIso8601String(),
    ]);
});
