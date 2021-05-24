<?php

use Illuminate\Support\Facades\Route;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
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

Route::get('/', function () {
    return view('frontEnd.home');
})->name('home');

Route::get('/change-password', function() {
    return View::make('frontEnd.change-password');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('frontlogout', 'RegisterController@logout'); 
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('projects','admin\ProjectController');

    Route::post('project/assign','admin\ProjectController@project_assign')->name('project.assign.user');

    Route::post('updateother/{id}','UserController@updateOther')->name('users.updateother');
    Route::post('updateGenral/{id}','UserController@updateGenral')->name('updateGenral');
    Route::post('updateInfo/{id}','UserController@updateInfo')->name('updateInfo');
    Route::get('setting','UserController@getProfile')->name('setting');
    Route::post('change-password', 'UserController@changePassword')->name('change-password');
    Route::get('/post-project','ProjectController@index')->name('post-project');
    Route::get('/edit-project/{id}','ProjectController@edit')->name('edit-project');
    Route::get('/ongoing-project','ProjectController@ongoingProject')->name('ongoing-project');
    Route::get('/past-project','ProjectController@pastProject')->name('past-project');
    Route::get('/my-project','ProjectController@myProject')->name('my-project');
    Route::get('/my-profile','ProfileController@index')->name('my-profile');
     Route::post('post-profile/{id}','ProfileController@postProfile')->name('post-profile');
     Route::post('update-project/{id}','ProjectController@update')->name('update-project');
      Route::delete('project/destroy/{id}', 'ProjectController@destroy')->name('project.destroy');

       Route::delete('project-assignment/destroy/{id}', 'ProjectController@destroy_assignment')->name('project.assignment.destroy');

       Route::post('project-assignment/accept/', 'ProjectController@accept_assignment')->name('project.assignment.accept');
       Route::get('project/details/{id}', 'ProjectController@project_details')->name('project.user.details');
       Route::get('/user-projects','ProjectController@userProject')->name('user.projects');

    Route::post('/storeProject','ProjectController@store')->name('storeProject');

     Route::post('postpassword', [
        'uses' => 'RegisterController@changePassword',
        'as' => 'postpassword'
    ]); 
     
});

Route::get('/confirmemail/{token}', 'RegisterController@confirmemail')->name('confirmemail');
Auth::routes();
Route::get('/cache', function() {
    Artisan::call('config:cache');
    Artisan::call('permission:cache-reset');
    return "Cache is cleared";
});

Route::post('userregister', [
    'uses' => 'RegisterController@userRegister',
    'as' => 'userregister'
]);

Route::post('userlogin', [
    'uses' => 'RegisterController@userLogin',
    'as' => 'userlogin'
]);
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/userdashboard', 'DashboardController@userdashboard')->name('userdashboard');
Route::get('/my-notification', 'DashboardController@mynotification')->name('mynotification');