<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
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
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'Utilisateurs'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
            Route::get('user/delete/{id}', [UsersController::class, 'delete'])->name('users.delete');

        });

        Route::group(['prefix' => 'Produits'], function() {
            Route::get('/', 'ProduitsController@index')->name('produits.index');
            Route::get('/create', 'ProduitsController@create')->name('produits.create');
            Route::post('/create', 'ProduitsController@store')->name('produits.store');
            Route::get('/{produit}/show', 'ProduitsController@show')->name('produits.show');
            Route::get('/{produit}/edit', 'ProduitsController@edit')->name('produits.edit');
            Route::patch('/{produit}/update', 'ProduitsController@update')->name('produits.update');
            Route::delete('/{produit}/delete', 'ProduitsController@destroy')->name('produits.destroy');
            Route::get('produit/delete/{id}', [ProduitsController::class, 'delete'])->name('produits.delete');

        });

        Route::group(['prefix' => 'Catégories'], function() {
            Route::get('/', 'CategorieController@index')->name('categorie.index');
            Route::get('/create', 'CategorieController@create')->name('categorie.create');
            Route::post('/create', 'CategorieController@store')->name('categorie.store');
            Route::get('/{categorie}/show', 'CategorieController@show')->name('categorie.show');
            Route::get('/{categorie}/edit', 'CategorieController@edit')->name('categorie.edit');
            Route::patch('/{categorie}/update', 'CategorieController@update')->name('categorie.update');
            Route::delete('/{categorie}/delete', 'CategorieController@destroy')->name('categorie.destroy');
            Route::get('categorie/delete/{id}', [CategorieController::class, 'delete'])->name('categorie.delete');

        });


        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

        Route::get('role/delete/{id}', [RolesController::class, 'delete'])->name('roles.delete');

    });

  
});
