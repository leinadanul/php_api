<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Support\Facades\Route;

/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/

Route::get('categories',            [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);


//Esto
Route::apiResource('recipes', RecipeController::class);


//Es igual a esto
/*
Route::get('recipes',              [RecipeController::class, 'index']);
Route::post('recipes',             [RecipeController::class, 'store']);
Route::get('recipes/{recipe}',     [RecipeController::class, 'show']);
Route::put('recipes/{recipe}',     [RecipeController::class, 'update']);
Route::delete('recipes/{recipe}',  [RecipeController::class, 'destory']);
*/




Route::get('tags',                  [TagController::class, 'index']);
Route::get('tags/{tag}',      [TagController::class, 'show']);
