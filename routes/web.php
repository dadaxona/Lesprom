<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ScoolController3;
use App\Http\Controllers\ScoolController4;
use App\Http\Controllers\ScoolController5;
use App\Http\Controllers\ScoolController6;
use App\Http\Controllers\UniversalController;

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
// Excel
Route::get('export',[ContactController::class, 'export'])->name('export');
Route::get('exports',[ContactController::class, 'exports'])->name('exports');
// Autharisation
Route::get('/', [CustomAuthController::class,'login'])->name('login');
Route::post('login-user', [CustomAuthController::class,'loginuser'])->name('login-user');
Route::get('/glavninachal', [CustomAuthController::class,'dashbord'])->middleware('isLog');
Route::get('/dashbord', [CustomAuthController::class,'dashbord3'])->middleware('isLoggedIn');
Route::get('/logaut', [CustomAuthController::class,'logaut']);
Route::get('logindrekror', [CustomAuthController::class,'logindrekror'])->name('logindrekror');
Route::get('loginbugalter', [CustomAuthController::class,'loginbugalter'])->name('loginbugalter');
Route::post('paroldrekror', [CustomAuthController::class,'paroldrekror'])->name('paroldrekror');
Route::post('bugalterparol', [CustomAuthController::class,'bugalterparol'])->name('bugalterparol');
//1
Route::get('index', [UniversalController::class,'index'])->name('index');
Route::post('create', [UniversalController::class,'create'])->name('create');
Route::post('store', [UniversalController::class,'store'])->name('store');
Route::get('showoydrektor/{id}', [UniversalController::class,'showoydrektor'])->name('showoydrektor');
Route::get('show/{id}', [UniversalController::class,'show'])->name('show');
Route::get('edit/{id}', [UniversalController::class,'edit'])->name('edit');
Route::post('update/{id}', [UniversalController::class,'update'])->name('update');
Route::post('delete/{id}', [UniversalController::class,'delete'])->name('delete');
//2
Route::get('index2/{id}', [UniversalController::class,'index2'])->name('index2');
Route::post('create2', [UniversalController::class,'create2'])->name('create2');
Route::post('store2', [UniversalController::class,'store2'])->name('store2');
Route::get('show2/{id}', [UniversalController::class,'show2'])->name('show2');
Route::get('edit2/{id}', [UniversalController::class,'edit2'])->name('edit2');
Route::post('update2/{id}', [UniversalController::class,'update2'])->name('update2');
Route::post('delete2/{id}', [UniversalController::class,'delete2'])->name('delete2');
//3
Route::get('index3', [UniversalController::class,'index3'])->name('index3');
Route::post('create3', [UniversalController::class,'create3'])->name('create3');
Route::post('store3', [UniversalController::class,'store3'])->name('store3');
Route::get('show3', [UniversalController::class,'show3'])->name('show3');
Route::get('edit3/{id}', [UniversalController::class,'edit3'])->name('edit3');
Route::post('update3/{id}', [UniversalController::class,'update3'])->name('update3');
Route::post('delete3/{id}', [UniversalController::class,'delete3'])->name('delete3');
//4
Route::get('index4', [UniversalController::class,'index4'])->name('index4');
Route::post('create4', [UniversalController::class,'create4'])->name('create4');
Route::post('store4/{id}', [UniversalController::class,'store4'])->name('store4');
Route::get('show4/{id}', [UniversalController::class,'show4'])->name('show4');
Route::get('edit4/{id}', [UniversalController::class,'edit4'])->name('edit4');
Route::post('update4/{id}', [UniversalController::class,'update4'])->name('update4');
Route::post('delete4/{id}', [UniversalController::class,'delete4'])->name('delete4');
//5
Route::get('malumotlar' , [UniversalController::class,'malumotlar'])->name('malumotlar');
Route::get('tolov' , [UniversalController::class,'tolov'])->name('tolov');
Route::get('index5', [UniversalController::class,'index5'])->name('index5');
Route::post('createm5', [UniversalController::class,'createm5'])->name('createm5');
Route::post('create5', [UniversalController::class,'create5'])->name('create5');
Route::get('edit5/{id}', [UniversalController::class,'edit5'])->name('edit5');
Route::post('update5/{id}', [UniversalController::class,'update5'])->name('update5');
Route::post('delete5/{id}', [UniversalController::class,'delete5'])->name('delete5');
//6
Route::get('malumotlar2', [ScoolController3::class,'malumotlar2'])->name('malumotlar2');
Route::get('tolov2', [ScoolController3::class,'tolov2'])->name('tolov2');
Route::get('index6', [ScoolController3::class,'index6'])->name('index6');
Route::post('create6', [ScoolController3::class,'create6'])->name('create6');
Route::post('createdm6', [ScoolController3::class,'createdm6'])->name('createdm6');
Route::post('show6', [ScoolController3::class,'show6'])->name('show6');
Route::get('jismoniyedit/{id}', [ScoolController3::class,'jismoniyedit'])->name('jismoniyedit');
Route::post('jismoniyedit2/{id}', [ScoolController3::class,'jismoniyedit2'])->name('jismoniyedit2');
Route::get('edit6/{id}', [ScoolController3::class,'edit6'])->name('edit6');
Route::post('update6/{id}', [ScoolController3::class,'update6'])->name('update6');
Route::post('jismoniydalet/{id}', [ScoolController3::class,'jismoniydalet'])->name('jismoniydalet');
Route::post('delete6/{id}', [ScoolController3::class,'delete6'])->name('delete6');
Route::post('delete66/{id}', [ScoolController3::class,'delete66'])->name('delete66');
Route::post('delete666/{id}', [ScoolController3::class,'delete666'])->name('delete666');
//7
Route::get('index7', [ScoolController4::class,'index7'])->name('index7');
Route::post('create7', [ScoolController4::class,'create7'])->name('create7');
Route::post('store7', [ScoolController4::class,'store7'])->name('store7');
Route::get('show7', [ScoolController4::class,'show7'])->name('show7');
Route::get('yuridikedit/{id}', [ScoolController4::class,'yuridikedit'])->name('yuridikedit');
Route::get('edit7/{id}', [ScoolController4::class,'edit7'])->name('edit7');
Route::post('update7/{id}', [ScoolController4::class,'update7'])->name('update7');
Route::post('delete7/{id}', [ScoolController4::class,'delete7'])->name('delete7');
Route::post('yuridikdelet/{id}', [ScoolController4::class,'yuridikdelet'])->name('yuridikdelet');
//8
Route::get('tiklash', [ScoolController5::class,'tiklash'])->name('tiklash');
Route::post('tiklash2/{id}', [ScoolController5::class,'tiklash2'])->name('tiklash2');
Route::post('tozalasha', [ScoolController5::class,'tozalasha'])->name('tozalasha');
Route::get('index8', [ScoolController5::class,'index8'])->name('index8');
Route::post('dele8/{id}', [ScoolController5::class,'dele8'])->name('dele8');
Route::post('store8', [ScoolController5::class,'store8'])->name('store8');
Route::get('show8/{id}', [ScoolController5::class,'show8'])->name('show8');
Route::get('edit8/{id}', [ScoolController5::class,'edit8'])->name('edit8');
Route::post('delete8/{id}', [ScoolController5::class,'delete8'])->name('delete8');
//9
Route::get('index9', [ScoolController6::class,'index9'])->name('index9');
Route::post('create9', [ScoolController6::class,'create9'])->name('create9');
Route::post('store9', [ScoolController6::class,'store9'])->name('store9');
Route::get('show9', [ScoolController6::class,'show9'])->name('show9');
Route::get('edit9/{id}', [ScoolController6::class,'edit9'])->name('edit9');
Route::post('delete9/{id}', [ScoolController6::class,'delete9'])->name('delete9');
//10
Route::get('index11', [ScoolController6::class,'index11'])->name('index11');
Route::get('index12', [ScoolController6::class,'index12'])->name('index12');
Route::get('index13', [ScoolController6::class,'index13'])->name('index13');
Route::get('index14', [ScoolController6::class,'index14'])->name('index14');
Route::get('index15', [ScoolController6::class,'index15'])->name('index15');
Route::get('index16', [ScoolController6::class,'index16'])->name('index16');
Route::get('index17', [ScoolController6::class,'index17'])->name('index17');
//11
Route::get('index18drektor', [ScoolController6::class,'index18drektor'])->name('index18drektor');

Route::get('index18', [ScoolController6::class,'index18'])->name('index18');
Route::get('index19', [ScoolController6::class,'index19'])->name('index19');
Route::get('index19drektor', [ScoolController6::class,'index19drektor'])->name('index19drektor');
Route::get('index20drektor', [ScoolController6::class,'index20drektor'])->name('index20drektor');
Route::get('index21drektor', [ScoolController6::class,'index21drektor'])->name('index21drektor');
Route::get('index22drektor', [ScoolController6::class,'index22drektor'])->name('index22drektor');
Route::get('index23drektor', [ScoolController6::class,'index23drektor'])->name('index23drektor');
Route::get('index24drektor', [ScoolController6::class,'index24drektor'])->name('index24drektor');
Route::get('index25drektor', [ScoolController6::class,'index25drektor'])->name('index25drektor');

Route::get('index20', [ScoolController6::class,'index20'])->name('index20');
Route::get('index21', [ScoolController6::class,'index21'])->name('index21');
Route::get('index22', [ScoolController6::class,'index22'])->name('index22');
Route::get('index23', [ScoolController6::class,'index23'])->name('index23');
Route::get('index24', [ScoolController6::class,'index24'])->name('index24');
Route::get('index25', [ScoolController6::class,'index25'])->name('index25');
//10
Route::get('index26drektor', [ScoolController6::class,'index26drektor'])->name('index26drektor');
Route::get('index26', [ScoolController6::class,'index26'])->name('index26');
Route::get('index27drektor', [ScoolController6::class,'index27drektor'])->name('index27drektor');
Route::get('index28drektor', [ScoolController6::class,'index28drektor'])->name('index28drektor');
Route::get('index27', [ScoolController6::class,'index27'])->name('index27');
Route::get('index29drektor', [ScoolController6::class,'index29drektor'])->name('index29drektor');

Route::get('index28', [ScoolController6::class,'index28'])->name('index28');
Route::get('index30drektor', [ScoolController6::class,'index30drektor'])->name('index30drektor');
Route::get('index29', [ScoolController6::class,'index29'])->name('index29');
Route::get('index31drektor', [ScoolController6::class,'index31drektor'])->name('index31drektor');
Route::get('index30', [ScoolController6::class,'index30'])->name('index30');
Route::get('index31', [ScoolController6::class,'index31'])->name('index31');

Route::get('index32', [ScoolController6::class,'index32'])->name('index32');
Route::get('index33', [ScoolController6::class,'index33'])->name('index33');
Route::get('index34', [ScoolController6::class,'index34'])->name('index34');
Route::post('yuridik222/{id}', [ScoolController6::class,'yuridik222'])->name('yuridik222');
Route::post('yuridik/{id}', [ScoolController6::class,'yuridik'])->name('yuridik');
Route::post('jismoniy222/{id}', [ScoolController6::class,'jismoniy222'])->name('jismoniy222');
Route::post('jismoniy/{id}', [ScoolController6::class,'jismoniy'])->name('jismoniy');
// search 
Route::get('search', [ScoolController6::class,'search'])->name('search');
Route::get('search2', [ScoolController6::class,'search2'])->name('search2');