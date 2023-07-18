
<?php
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//view routes 
Route::get('/', function () {
    return view('index');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/edit_profile', function () {
    return view('edit_profile');
});
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/notification', function () {
    return view('notification');
});
Route::get('/profile', function () {
    return view('profile');
});
//post routes 
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');
Route::post('/signup', [RegistrationController::class, 'register'])->name('register');
Route::post('/getallusers/{var1?}/{var2?}', [UserController::class, "GetAllUsers"]);
Route::post('/favorite', [UserController::class, "FavoriteUser"]);
Route::post('/block', [UserController::class, "BlockUser"]);
Route::post('/message', [UserController::class, "MessageUser"]);
Route::post('/getallfavorites', [UserController::class, "GetAllFavorites"]);
Route::post('/getallblocks', [UserController::class, "GetAllBlocks"]);
Route::post('/getallmessages', [UserController::class, "GetAllMessages"]);
Route::post('/resetpassword' , [UserController::class, "ResetPassword"]);
Route::post('/editprofile' , [UserController::class, "EditProfile"]);
Route::post('/getuserinfo' , [UserController::class, "GetUserInfo"]);


