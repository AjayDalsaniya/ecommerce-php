<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\allSubCategoryController;
use App\Http\Controllers\allorder;

// Route::get('/', function () {
//     return view('welcome');
// });

//Register
Route::get("/register/",[userController::class,'register'])->name('register');

Route::post("/register-Data/",[userController:: class,'registerData'])->name("registerData");




//---------------------------------------------------
//login

Route::get("/login/",[userController::class,'login'])->name('login');

Route::post("/login-Data/",[userController:: class,'logindata'])->name("logindata");
//----------------------------------------------------------------------------------
//logout
Route::get("/logout/",[userController::class,'logout'])->name('logout');


Route::get('/adminpanel/',[userController::class,'adminPanel']);

Route::get("/All-Item-Category/",[ItemCategoryController::class,'All_Item_Category'])->name("All_Item_Category");


Route::get("/Add-Item-Category/",[ItemCategoryController::class,'Add_Item_Category'])->name("Add_Item_Category");
Route::post("/add-Item-Category-data/",[ItemCategoryController:: class,'add_Item_Category_data' ])->name("add_Item_Category_data");


Route::post("/allItemCategoryAdminUpdate/{id}/",[ItemCategoryController::class,'allItemCategoryAdminUpdate'])->name('allItemCategoryAdminUpdate');

Route::get("/allItemCategoryAdminDelete/{id}/",[ItemCategoryController::class,'allItemCategoryAdminDelete'])->name('allItemCategoryAdminDelete');

//--------------------------------------------------------------------------------------------------------------------------------------------
// All sub category
Route::get("/all-sub-category/",[allSubCategoryController::class,'all_sub_category'])->name('all_sub_category');
Route::get("/add-subCat-AdminPanel/",[allSubCategoryController::class,'addsubCatAdminPanel'])->name('addsubCatAdminPanel');
Route::post("/add-sub-Cat-AdminPanel-Data/",[allSubCategoryController:: class,'addsubCatAdminPanelData' ])->name("addsubCatAdminPanelData");

Route::post("/all-sub-Category-Admin-Update/{id}/",[allSubCategoryController::class,'allsubCategoryAdminUpdate'])->name('allsubCategoryAdminUpdate');

Route::get("/all-sub-Category-Admin-delete/{id}/",[allSubCategoryController::class,'allsubCategoryAdmindelete'])->name('allsubCategoryAdmindelete');


//----------------------------------------------------------------------------------------------------------------------------------
//allItemAdmin

Route::get("/all-Item-Admin/",[ItemController::class,'allItemAdmin'])->name('allItemAdmin');

Route::get("/add-Item-AdminPanel/",[ItemController::class,'addItemAdminPanel'])->name('addItemAdminPanel');

Route::post("/add-Item-AdminPanel-Data/",[ItemController:: class,'addItemAdminPanelData'])->name("addItemAdminPanelData");

Route::post("/all-Item-Admin-Update/{id}/",[ItemController::class,'allItemAdminUpdate'])->name('allItemAdminUpdate');

Route::get("/all-Item-Admin-delete/{id}/",[ItemController::class,'allItemAdmindelete'])->name('allItemAdmindelete');


Route::get("/allorder/",[allorder::class,'allorder'])->name('allorder');
Route::post("/allOrderAdminUpdate/{id}/",[allorder::class,'allOrderAdminUpdate'])->name('allOrderAdminUpdate');
//-----------------------------------------------------------------------------------------
//customer panel


Route::get("/about/",[userController::class,'about'])->name('about');
Route::get("/contact/",[userController::class,'contact'])->name('contact');
Route::get("/",[userController::class,'index'])->name('index');

//account
Route::get("/myorder/",[userController::class,'myorder'])->name('myorder');

//subcategory
Route::get('/subcategory/{id}',[userController::class,'subcategory'])->name('subcategory');

//single-product
Route::get('/single_product/{id}',[userController::class,'single_product'])->name('single_product');

//cart
Route::get('/cart/',[userController::class,'cart'])->name('cart');
// cartdelete
Route::get('/cartdelete/{id}',[userController::class,'cartdelete'])->name('cartdelete');
Route::get('/addtocart/{id}',[userController::class,'addtocart'])->name('addtocart');
Route::post("/cartdata/",[userController:: class,'cartdata'])->name("cartdata");


//orderdata
Route::post("/orderdata/",[userController:: class,'orderdata'])->name("orderdata");

//buynow
Route::get('/buynow/{id}',[userController::class,'buynow'])->name('buynow');

Route::post("/buynowdata/",[userController:: class,'buynowdata'])->name("buynowdata");
//cancelorder
Route::get('/cancelorder/{id}',[userController::class,'cancelorder'])->name('cancelorder');


//search
Route::get('/product-list',[userController::class,'productlistAjax']);
//searchproduct
Route::post('searchproduct',[userController::class,'searchproduct']);
