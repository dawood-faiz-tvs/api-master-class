<?php

use App\Http\Controllers\API\V1\TicketController;
use App\Http\Controllers\API\V1\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('tickets', TicketController::class)->middleware('auth:sanctum');
Route::apiResource('users', UserController::class)->middleware('auth:sanctum');
