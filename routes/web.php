<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\Adminlogincontroller;

use App\Http\Controllers\Admin\Admincontroller;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\HeaderFooterController;

use App\Http\Controllers\Home_Controller;

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

Route::get('/',[Home_Controller::class,'index']);

Route::post('/getinquiry',[Home_Controller::class, 'getinquiry']);


Route::post('/price_inquiry',[Home_Controller::class, 'price_inquiry']);




Route::prefix('admin')->group(function(){  
    Route::get('/login',[Adminlogincontroller::class, 'login']);
    Route::post('/login',[Adminlogincontroller::class, 'authenticate'])->name('login');
    Route::get('/logout',[Adminlogincontroller::class, 'logout'])->name('adminlogout');
    Route::get('/forgetpasswordview',[Adminlogincontroller::class, 'forgetpasswordview'])->name('forgetpasswordview');
    Route::post('/resetpasswordlink',[Adminlogincontroller::class, 'resetpasswordlink'])->name('resetpasswordlink');
    Route::get('/resetpasswordview/{id}',[Adminlogincontroller::class, 'resetpasswordview'])->name('resetpasswordview');
    Route::post('/resetpassword/{id}',[Adminlogincontroller::class, 'resetpassword'])->name('resetpassword');
    Route::get('/changepassword',[Admincontroller::class, 'changepassword']);
    Route::post('/updatepassword/{id}',[Admincontroller::class, 'updatepassword']);
    Route::get('/edit_profile',[Admincontroller::class, 'edit_profile']);
    Route::post('/store_edit_profile',[Admincontroller::class, 'store_edit_profile']);
    Route::get('/home',[Admincontroller::class, 'home']);



    Route::get('/inquiry',[HomeController::class, 'inquiry']);
    Route::get('/delete_inquiry/{id}',[HomeController::class, 'delete_inquiry']);
    

    Route::get('/price_inquiry',[HomeController::class, 'price_inquiry']);
    Route::get('/delete_price_inquiry/{id}',[HomeController::class, 'delete_price_inquiry']);



    Route::get('/home_banner',[HomeController::class, 'home_banner']);
    Route::get('/add_home_banner_data/{id}',[HomeController::class, 'add_home_banner_data']);
    Route::post('/store_add_home_banner_data/{id}',[HomeController::class, 'store_add_home_banner_data']);

    Route::get('/home_land',[HomeController::class, 'home_land']);
    Route::get('/add_home_land_data/{id}',[HomeController::class, 'add_home_land_data']);
    Route::post('/store_add_home_land_data/{id}',[HomeController::class, 'store_add_home_land_data']);
    Route::get('/delete_home_land/{id}',[HomeController::class, 'delete_home_land']);


    Route::get('/home_feature',[HomeController::class, 'home_feature']);
    Route::get('/add_home_feature_data/{id}',[HomeController::class, 'add_home_feature_data']);
    Route::post('/store_add_home_feature_data/{id}',[HomeController::class, 'store_add_home_feature_data']);
    Route::get('/delete_home_feature/{id}',[HomeController::class, 'delete_home_feature']);


    Route::get('/add_feature',[HomeController::class, 'add_feature']);
    Route::get('/remove_feature',[HomeController::class, 'remove_feature']);
    Route::get('/view_home_feature/{id}',[HomeController::class, 'view_home_feature']);



    Route::get('/home_config',[HomeController::class, 'home_config']);
    Route::get('/update_home_config_description_data/{id}',[HomeController::class, 'update_home_config_description_data']);
    Route::post('/store_update_home_config_description_data/{id}',[HomeController::class, 'store_update_home_config_description_data']);
    Route::get('/add_home_config_data/{id}',[HomeController::class, 'add_home_config_data']);
    Route::post('/store_add_home_config_data/{id}',[HomeController::class, 'store_add_home_config_data']);
    Route::get('/delete_home_config/{id}',[HomeController::class, 'delete_home_config']);






    Route::get('/home_gallery',[HomeController::class, 'home_gallery']);
    Route::get('/update_home_gallery_description_data/{id}',[HomeController::class, 'update_home_gallery_description_data']);
    Route::post('/store_update_home_gallery_description_data/{id}',[HomeController::class, 'store_update_home_gallery_description_data']);
    Route::get('/add_home_gallery_data/{id}',[HomeController::class, 'add_home_gallery_data']);
    Route::post('/store_add_home_gallery_data/{id}',[HomeController::class, 'store_add_home_gallery_data']);
    Route::get('/delete_home_gallery/{id}',[HomeController::class, 'delete_home_gallery']);



    Route::get('/home_plan',[HomeController::class, 'home_plan']);
    Route::get('/update_home_plan_description_data/{id}',[HomeController::class, 'update_home_plan_description_data']);
    Route::post('/store_update_home_plan_description_data/{id}',[HomeController::class, 'store_update_home_plan_description_data']);
    Route::get('/add_home_plan_data/{id}',[HomeController::class, 'add_home_plan_data']);
    Route::post('/store_add_home_plan_data/{id}',[HomeController::class, 'store_add_home_plan_data']);
    Route::get('/delete_home_plan/{id}',[HomeController::class, 'delete_home_plan']);




    Route::get('/home_overview',[HomeController::class, 'home_overview']);
    Route::get('/update_home_overview_description_data/{id}',[HomeController::class, 'update_home_overview_description_data']);
    Route::post('/store_update_home_overview_description_data/{id}',[HomeController::class, 'store_update_home_overview_description_data']);





    Route::get('/home_amenities',[HomeController::class, 'home_amenities']);
    Route::get('/update_home_amenities_description_data/{id}',[HomeController::class, 'update_home_amenities_description_data']);
    Route::post('/store_update_home_amenities_description_data/{id}',[HomeController::class, 'store_update_home_amenities_description_data']);
    Route::get('/add_home_amenities_data/{id}',[HomeController::class, 'add_home_amenities_data']);
    Route::post('/store_add_home_amenities_data/{id}',[HomeController::class, 'store_add_home_amenities_data']);
    Route::get('/delete_home_amenities/{id}',[HomeController::class, 'delete_home_amenities']);





    Route::get('/home_contact',[HomeController::class, 'home_contact']);
    Route::get('/update_contact_title_data/{id}',[HomeController::class, 'update_contact_title_data']);
    Route::post('/store_update_contact_title_data/{id}',[HomeController::class, 'store_update_contact_title_data']);
    Route::get('/add_location_data/{id}',[HomeController::class, 'add_location_data']);
    Route::post('/store_add_location_data/{id}',[HomeController::class, 'store_add_location_data']);
    Route::get('/delete_location/{id}',[HomeController::class, 'delete_location']);

    Route::get('/add_section',[HomeController::class, 'add_section']);
    Route::get('/remove_section',[HomeController::class, 'remove_section']);



    /*HeaderFooterController  New    HeaderFooterController  New   HeaderFooterController  New   HeaderFooterController  New   */

    Route::get('/footer_description',[HeaderFooterController::class, 'footer_description']);
    Route::get('/add_footer_description_data/{id}',[HeaderFooterController::class, 'add_footer_description_data']);
    Route::post('/store_add_footer_description_data/{id}',[HeaderFooterController::class, 'store_add_footer_description_data']);

    Route::get('/footer_address',[HeaderFooterController::class, 'footer_address']);
    Route::get('/add_footer_address_data/{id}',[HeaderFooterController::class, 'add_footer_address_data']);
    Route::post('/store_add_footer_address_data/{id}',[HeaderFooterController::class, 'store_add_footer_address_data']);
    


});
