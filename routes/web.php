<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\DatesController;
use App\Http\Controllers\frontend\CommitteesController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\SponsorsController;
use App\Http\Controllers\frontend\VENUEController;
use App\Http\Controllers\frontend\MediasController;
use App\Http\Controllers\frontend\KeynoteController;
use App\Http\Controllers\frontend\TunisController;
use App\Http\Controllers\frontend\ConferenceVenueController;
use App\Http\Controllers\frontend\HotelsController;
use App\Http\Controllers\frontend\ProgramController;
use App\Http\Controllers\frontend\GuidelinesController;
use App\Http\Controllers\frontend\CallforPapersController;
use App\Http\Controllers\frontend\RegistrationController;
use App\Http\Controllers\frontend\SocialEventsController;
use App\Http\Controllers\frontend\SpecialSessionsController;
;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/dates', [DatesController::class, 'index']);
Route::get('/committees', [CommitteesController::class, 'index']);
Route::get('/sponsors', [SponsorsController::class, 'index']);
Route::get('/venue', [VENUEController::class, 'index']);
Route::get('/medias', [MediasController::class, 'index']);
Route::get('/keynote', [keynoteController::class, 'index']);
Route::get('/tunis', [TunisController::class, 'index']);
Route::get('/conference', [ConferenceVenueController::class, 'index']);
Route::get('/hotels', [HotelsController::class, 'index']);
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/guidelines', [GuidelinesController::class, 'index']);
Route::get('/callforpapers', [CallforPapersController::class, 'index']);
Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('/socialevents', [SocialEventsController::class, 'index']);
Route::get('/specialsessions', [SpecialSessionsController::class, 'index']);

