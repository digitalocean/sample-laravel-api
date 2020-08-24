<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// this is an api resource which creates multiple routes for CRUD
// this points the /api/posts routes to the PostController.php
// you can see all the routes if you type php artisan route:list
// https://laravel.com/docs/7.x/controllers#restful-partial-resource-routes
Route::apiResource('posts', 'PostController');
