

<?php
use App\Http\Controllers\Admin\SiparisController;
use App\Http\Controllers\Admin\UrunController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\HesabimController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\ModelIslemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;
use App\Http\Controllers\HesapIslemleri;
use App\Http\Controllers\AdminHesapIslemleri;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SayfaController;

Route::redirect('/', '/index');
Route::get('/index', function () {
    return view('pages.index');
})->name('index');


Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);


// Giriş ve Kayıt olma GET POST 
Route::get('/girisyap', function () {
    return view('hesap.kullanici.girisyap');
});
Route::get('/kayitol', function () {
    return view('hesap.kullanici.kayitol');
});
Route::post('hesap/girisyap',[HesapIslemleri::class,'loginpost'])->name('loginpost');
Route::get('/sifresifirla', function () {
    return view('hesap.kullanici.sifresifirla');
})->name('sifreSifirla');
Route::post('hesap/kayitol',[HesapIslemleri::class,'registerpost'])->name('registerpost');
// Giriş ve Kayıt olma GET POST 
//Çıkış yapma
Route::get('logout', [LogoutController::class, 'index'])->name('logout');


Route::get('/admin/girisyap', function () {
    return view('hesap.admin.girisyap');
});

Route::post('hesap/admin/girisyap',[AdminHesapIslemleri::class,'loginpost'])->name('adminloginpost');


Route::get('/hesabim', [HesabimController::class,'get'])->name('hesabim');

// profile update

Route::post('hesabim',[HesabimController::class,'update'])->name('kullanici.profilUpdate');

//admin sayfaları

Route::get('/adminindex', function () {
    return view('pages.adminindex');
})->name('adminindex');
Route::get('/admin/sifresifirla', function () {
    return view('hesap.admin.sifresifirla');
})->name('adminSifreSifirla');


// kullanici sifre sifirlama 
Route::get('/sifresifirla', function () {
    return view('hesap.kullanici.sifresifirla');
});
Route::post('/sifresifirla-post', [PasswordResetController::class, 'kullanici_new_password']);

// admin sifre sifirlama
Route::get('/sifresifirla', function () {
    return view('hesap.admin.sifresifirla');
});
Route::post('/sifresifirla-post', [PasswordResetController::class, 'admin_new_password']);


// admin paneli kullanici sayfasi

Route::get('/kullanicigoruntule',[UserController::class, 'show']);
Route::get('/changeStatus',[UserController::class,'changeMemberStatus'])->name('changeStatus');

Route::get('/kategorigoruntule',[KategoriController::class, 'show']);


Route::get('users', [UserController::class,'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

