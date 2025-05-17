
<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home'); // or replace with your own view like 'home'
// });

use App\Http\Controllers\FormController;
use App\Http\Controllers\FormController_Lawyer;
use App\Http\Controllers\Picker;

Route::get('/pick', [Picker::class, 'showForm'])->name('pick');

Route::get('/form', [FormController::class, 'showForm'])->name('form');
Route::post('/form', [FormController::class, 'handleForm'])->name('form.submit');
Route::get('/form/entries', [FormController::class, 'viewEntries']);

// Route::get('/form', function () {
//     return view('form');
// })->name('form');

Route::get('/form2', [FormController_Lawyer::class, 'showForm'])->name('form2');
Route::post('/form2', [FormController_Lawyer::class, 'handleForm'])->name('form2.submit');
Route::get('/form2/entries', [FormController_Lawyer::class, 'viewEntries']);

// Route::get('/form2', function () {
//     return view('form_2');
// })->name('form2');

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'handleForm'])->name('login.submit');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');
?>