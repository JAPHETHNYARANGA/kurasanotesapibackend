<?php

use App\Http\Controllers\notesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//notes

Route::get('contacts', [notesController::class,'getNotes']);
Route::post('addContact', [notesController::class,'addNote']);
Route::get('contacts/{id}', [notesController::class,'getSpecificNote']);
Route::get('deleteContact/{id}', [notesController::class,'deleteNote']);
Route::put('updateContact/{id}',[notesController::class,'updateNote']);