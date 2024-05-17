<?php
use App\Http\Controllers\Guests\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guests\ComicGuestController;

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


Route::get('/', [PageController::class, 'index'])->name('guests.welcome');

//Route::get('guests/comics', [ComicGuestController::class, 'index'])->name('guests.comics.index'); //questa non la utilizzo perche sarebbe la mia stessa pagina di welcome
Route::get('guests/comics/{comic}', [ComicGuestController::class, 'show'])->name('guests.comics.show');


// Route per ogni link del header:
Route::get('/characters', [PageController::class, 'characters'])->name('characters');
Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/tv', [PageController::class, 'tv'])->name('tv');
Route::get('/games', [PageController::class, 'games'])->name('games');
Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');
Route::get('/fans', [PageController::class, 'fans'])->name('fans');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');



/* CRUD */
Route::resource('comics', ComicController::class);
