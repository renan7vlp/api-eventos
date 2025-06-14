<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RSVPController;

Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::post('/rsvp', [RSVPController::class, 'store']);
Route::get('/rsvp', function () {
    return response()->json(['message' => 'Endpoint not implemented yet'], 501);
});
