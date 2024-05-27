<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/bookdetail', function () {
    return view('bookdetail');
});
Route::get('/', function () {
    return view('homepage');
});
Route::get('/banner', function () {
    return view('banner');
});
Route::get('/homeadmin', function () {
    return view('homeadmin');
});
Route::get('/totalcustomer', function () {
    return view('totalcustomer');
});
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

// Route::get('/formcheck', function () {
//     return view('form');
// });

// Route::view('formcheck','form'); //tương tự get (chỉ dùng cho get)


// Route::post('/checkcheck', function () {
//     return 'Phương thức của Post';
// });


//nhận nhiều request (mặc định chạy lên là get, thay đổi value trong )
// Route::match(['get', 'post'], 'checkcheck', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });


//nhận bất kì request nào
// Route::any('checkany', function (Request $request) {
//     return $request -> method();
// });

//chuyển trang thông qua
// Route::redirect('formcheck', 'https://google.com');

// Route::prefix('product')->group(function () {
//     Route::get('/', function () {
//         return 'Danh sách sản phẩm';
//     });
//     Route::get('/add/{id}', function ($id) {
//         $content = 'id là ';
//         $content.='id ='.$id;
//         return $content;
//     });
//     Route::get('/update/{slug}-{id}', function ($slug, $id) {
//         $content = 'id là ';
//         $content.='id ='.$id.'</br>';
//         $content.='slug ='.$slug;
//         return $content;
//     });
//     Route::get('/delete/{id?}-{slug?}', function ($id = null, $slug=null) {
//         $content = 'id là ';
//         $content.='id ='.$id.'</br>';
//         $content.='slug ='.$slug;
//         return $content;
//     });
// });




//client router
// Route::prefix('/categories')->group(function () {
//     Route::get('/', [CategoriesController::class, 'Index']);
// });

// Route::get('/categories', function () {
//     $category = new Category();
//     $allcategory = $category::all();
//     dd($allcategory);
// });
//client router
