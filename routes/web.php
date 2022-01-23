<?php

use App\Http\Controllers\FilterController;
use App\Models\categoryProduct;
use App\Models\Discount;
use App\Models\Product;
use App\Models\Track;
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

Route::get('/',[\App\Http\Controllers\HomeController::class,"index"])->name("home");


Route::get("/category/{id}",function ($id){

    $filterController=new \App\Http\Controllers\FilterController;

    $products = $filterController->limitCategory($id);

    $discounts=Discount::all('product_id','discount_percentage','final_price');

    $mainCategories=categoryProduct::query()->where("is_main","=",true)->get();

    $leastProducts=Product::orderBy('created_at', 'desc')->get();
//        ->take(20)

    return view("main.shop", [
        "products"=>$products,
        "discounts"=>$discounts,
        "mainCategories"=>$mainCategories,
        "leastProducts"=>$leastProducts
    ]);
});

Route::get("/admin",[\App\Http\Controllers\Admin\DashboardController::class,"index"]);


Route::get("/admin/discountcode",[\App\Http\Controllers\DiscountCodeController::class,"index"])->name("admin.discountCode");

Route::get("/admin/admins",[\App\Http\Controllers\AdminController::class,"index"])->name("admins");

Route::get("/admin/role",[\App\Http\Controllers\RoleController::class,"index"])->name("role");
// Route::get("/admin/users",function (){
    
Route::get("/admin/permission",[\App\Http\Controllers\PermissionController::class,"index"])->name("permission");
//     $userController=new \App\Http\Controllers\UserController;
//     $users=$userController->index();

//     return view("dashboard.admin.user",["users"=>$users]);

// })->name("admin.users");

Route::get("/admin/users",[\App\Http\Controllers\UserController::class,"index"])->name("admin.users");

//                                                                                                                                                                        

Route::get("/admin/order",[\App\Http\Controllers\OrderController::class,"index"])->name("admin.order");

Route::get("/admin/payment",function (){
    return view("dashboard.admin.payment");
})->name("admin.payment");

Route::get("mail",[\App\Http\Controllers\Mail\Create::class,'__invoke'])->name("mail.compose");
Route::post("mail",[\App\Http\Controllers\Mail\send::class,'__invoke'])->name("mail.send");


// Route::get("/admin/product-discount",function (){
//     $productDiscountController=new \App\Http\Controllers\ProdcutDiscountController();
//     $productsDiscount=$productDiscountController->index();

//     return view("dashboard.admin.productDiscount",["productsDiscount"=>$productsDiscount]);
// })->name("admin.productDiscount");

Route::get("/admin/product-discount",[\App\Http\Controllers\ProdcutDiscountController::class,"index"])->name("admin.productDiscount");



// Route::get("/admin/product",function (){
//     $productController=new \App\Http\Controllers\ProductController();
//     $products=$productController->index();
//     return view("dashboard.admin.product",["products"=>$products]);
// })->name("admin.product");

Route::get("/admin/product",[\App\Http\Controllers\Admin\ProductController::class,"index"])->name("admin.product");

// Route::get("/admin/product/{id}",[\App\Http\Controllers\Admin\ProductController::class,"show"])->name("admin.product.details");

Route::post("/admin/product",[\App\Http\Controllers\ProductController::class,"store"])->name("admin.product.store");
Route::delete("/admin/product",[\App\Http\Controllers\ProductController::class,"destroy"])->name("admin.product.delete");
Route::put("/admin/product",[\App\Http\Controllers\ProductController::class,"update"])->name("admin.product.update");
Route::get("/admin/product/edit",[\App\Http\Controllers\Admin\ProductController::class,"edit"])->name("admin.product.edit");




Route::get('/shop',[\App\Http\Controllers\ShopController::class,"index"])->name("shop");

Route::get('/shop/filter',[\App\Http\Controllers\FilterController::class,"filter"])->name("shop.filter");

//Route::get('/shop/category/{id}',[\App\Http\Controllers\ShopController::class,"index"])->name("shop");

//Route::get('/profile',[\App\Http\Controllers\ProfileController::class,"index"])->name('profile');

Route::get('/profile',function (){
    return view("dashboard.user.index");
})->name('profile');

Route::get('/profile/order',function (){
    $tracks=Track::query()->where("user_id","=",auth()->user()->id)->get();
    return view("dashboard.user.orderList",["tracks"=>$tracks]);
})->name('profile.order');

Route::get('/profile/order/{track}',function ($track){

    $track=Track::query()->find($track);
    return view("dashboard.user.orderDetail",["track"=>$track]);
})->name('profile.orderDetail');

Route::get('/profile/addresses',function (){
    $addresses=\App\Models\UserAddress::query()->where("user_id","=",20)->get("user_address");
    return view("dashboard.user.address",["addresses"=>$addresses]);
})->name('profile.address');

Route::get('/profile/personal-info',function (){
    $info=\App\Models\User::query()->find(1);
    return view("dashboard.user.personalInfo",["info"=>$info]);
})->name('profile.personalInfo');

Route::get('/profile/favorites',function (){
    return view("dashboard.user.favorite");
})->name('profile.favorite');



Route::get('/cart',[\App\Http\Controllers\CartController::class,"shoppingCart"])->name("shoppingCart");
Route::get('/cart/add',[\App\Http\Controllers\CartController::class,"add"])->name("cart.add");
Route::get('/cart/remove',[\App\Http\Controllers\CartController::class,"remove"])->name("cart.remove");


Route::get('/checkout/create',[\App\Http\Controllers\CheckoutController::class,"createa"])->name("checkout.createe");
Route::post('/checkout',[\App\Http\Controllers\CheckoutController::class,"store"])->name("checkout");


Route::get('/favorite/{id}',[\App\Http\Controllers\FavoriteController::class,"store"])->name("favorite.toggle");
//Route::get('/favorite/toggle',[\App\Http\Controllers\FavoriteController::class,"index"])->name("favorite");

Route::get('/product/{id}',[\App\Http\Controllers\User\ProductController::class,"show"])->name('product.detail');



//Route::get('/product/add',[\App\Http\Controllers\ProductController::class,"index"])->name('addProduct');

//Route::get('/product/{id}',function (){});

//Route::get('/product/{id}',function (){
//    return view("product.details");
//})->name('product.detail');

//Route::post('/product/add',[\App\Http\Controllers\ProductController::class,"store"])->name('addProduct.store');


Route::get("/discount/add",function (){

});

Route::get('/test',function (){

    // $status=new App\Enums\StatusOrderEnum("onhold");
    return App\Enums\StatusOrderEnum::COMPLETED();



//    \App\Models\ProductFeatures::query()->create([Product::find(2),"wsf","swfw"]);
//    return collect(["color"=>"blue","size"=>"normal"])->toJson();

//    $product=\App\Models\ProductFeatures::query()->whereJsonContains("features->color","red")->get();
//    return $product;

    // $temp=new \App\Http\Controllers\ShopController();
    // return $temp->limitCategory(1);
    
//    $category=\App\Models\categoryProduct::query()->find(1);
//    $test=new \App\Models\Test;

//    return $test->show($category);

//    $temp=collect([]);
//    $temp=null;
//    echo count(json_decode("[]"));
//    session(["items"=>["color"=>"red"]]);

//    session()->push("items","black");
//    return session()->all();


//    $images=\App\Models\Product::query()->find(1)->image->urls;
//
//    $images=json_decode($images);
//
//    foreach ($images as $image){
//        echo "<img src='$image->url' alt='$image->alt' width='300' height='300'/>";
//    }

//return view("test");
});

Route::get("/testSet",function (){

//    return \Illuminate\Support\Facades\Hash::make("12345");
        return view("product.details");
//    $items=collect([["id"=>"424190","count"=> 3],["id"=> "424193", "count"=>1]]);
//
//    \App\Models\Test::query()->create(["item"=>$items->toJson()]);
//    return $items->toJson(JSON_PRETTY_PRINT);
});

Route::get("/testGet",function (){

//    $items=collect([["id"=>"424190","count"=> 3],["id"=> "424193", "count"=>1]]);

    $items=\App\Models\Test::query()->find(3)->only(["item"]);
    dd(\App\Models\Test::query()->find(3));
//    dd(\App\Models\Test::query()->find(3)->only(["item"]));

//      dd($items["item"]);
//    dd(json_decode($items["item"],true));

//    $items=$items->toArray();

//    return $items->toJson(JSON_PRETTY_PRINT);
});

//Route::get('/dashboard', function () {
////    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
