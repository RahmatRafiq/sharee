    <?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/detail-artikel/{slug}', [App\Http\Controllers\FrontEndController::class, 'show'])->name('detail-artikel');
Route::get('/kategori/{slug}', [App\Http\Controllers\FrontEndController::class, 'kategori'])->name('kategori');
Route::get('/tags-berita/{slug}', [App\Http\Controllers\FrontEndController::class, 'tags'])->name('tags');
Route::get('/search', [App\Http\Controllers\FrontEndController::class, 'search'])->name('search');
Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about'])->name('about');

Auth::routes(
    [
        'register' => false,
    ]
);

Route::get('/cok-regis123321-cok', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/cok-regis123321-cok', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    Route::resource('/tags', App\Http\Controllers\TagsController::class);
    Route::resource('/kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('/artikel', App\Http\Controllers\ArtikelController::class);
    Route::resource('/penulis', App\Http\Controllers\PenulisController::class);
    Route::resource('/tentang-kami', App\Http\Controllers\TentangKamiController::class);
});
