<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ContentPlaceController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ContentRestaurantController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ContentFoodController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ContentHotelController;
use App\Http\Controllers\FunController;
use App\Http\Controllers\HomeStayController;
use App\Http\Controllers\LocationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Customer
Route::get('customer/{id?}',[CustomerController::class, 'index'] );
Route::post('customer',[CustomerController::class, 'create'] );
Route::put('customer/{id}',[CustomerController::class, 'update'] );
Route::delete('customer/{id}',[CustomerController::class, 'delete'] );


Route::post('login',[CustomerController::class, 'login'] );
//Places
Route::get('place/{id?}',[PlaceController::class, 'index'] );
Route::post('place',[PlaceController::class, 'create'] );
Route::put('place/{id}',[PlaceController::class, 'update'] );
Route::delete('place/{id}',[PlaceController::class, 'delete'] );

//ContentPlace
Route::get('contentplace/{id?}',[ContentPlaceController::class, 'index'] );
Route::post('contentplace',[ContentPlaceController::class, 'create'] );
Route::put('contentplace/{id}',[ContentPlaceController::class, 'update'] );
Route::delete('contentplace/{id}',[ContentPlaceController::class, 'delete'] );

//Restaurant

Route::get('restaurant/{id?}',[RestaurantController::class, 'index'] );
Route::post('restaurant',[RestaurantController::class, 'create'] );
Route::put('restaurant/{id}',[RestaurantController::class, 'update'] );
Route::delete('restaurant/{id}',[RestaurantController::class, 'delete'] );

//ContentRestaurant
Route::get('postrestaurant/{id?}',[ContentRestaurantController::class, 'index'] );
Route::post('postrestaurant',[ContentRestaurantController::class, 'create'] );
Route::put('postrestaurant/{id}',[ContentRestaurantController::class, 'update'] );
Route::delete('postrestaurant/{id}',[ContentRestaurantController::class, 'delete'] );

//Food

Route::get('food/{id?}',[FoodController::class, 'index'] );
Route::post('food',[FoodController::class, 'create'] );
Route::put('food/{id}',[FoodController::class, 'update'] );
Route::delete('food/{id}',[FoodController::class, 'delete'] );

//ContentFood
Route::get('contentfood/{id?}',[ContentFoodController::class, 'index'] );
Route::post('contentfood',[ContentFoodController::class, 'create'] );
Route::put('contentfood/{id}',[ContentFoodController::class, 'update'] );
Route::delete('contentfood/{id}',[ContentFoodController::class, 'delete'] );

//Shopping

Route::get('shopping/{id?}',[ShoppingController::class, 'index'] );
Route::post('shopping',[ShoppingController::class, 'create'] );
Route::put('shopping/{id}',[ShoppingController::class, 'update'] );
Route::delete('shopping/{id}',[ShoppingController::class, 'delete'] );


//Hotel

Route::get('hotel/{id?}',[HotelController::class, 'index'] );
Route::post('hotel',[HotelController::class, 'create'] );
Route::put('hotel/{id}',[HotelController::class, 'update'] );
Route::delete('hotel/{id}',[HotelController::class, 'delete'] );

//Hotel

Route::get('fun/{id?}',[FunController::class, 'index'] );
Route::post('fun',[FunController::class, 'create'] );
Route::put('fun/{id}',[FunController::class, 'update'] );
Route::delete('fun/{id}',[FunController::class, 'delete'] );

//HomeStay
Route::get('homestay/{id?}',[HomeStayController::class, 'index'] );
Route::post('homestay',[HomeStayController::class, 'create'] );
Route::put('homestay/{id}',[HomeStayController::class, 'update'] );
Route::delete('homestay/{id}',[HomeStayController::class, 'delete'] );



// BookingTour

Route::get('bookingtour/{id?}',[LocationController::class, 'index'] );

Route::post('savetour/',[LocationController::class, 'savetour'] );