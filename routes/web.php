<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Auth','prefix' => 'account'], function(){
    Route::get('register','RegisterController@getFormRegister')->name('get.register');
    Route::post('register','RegisterController@postRegister');

    Route::get('login','LoginController@getFormLogin')->name('get.login');
    Route::post('login','LoginController@postLogin');

    Route::get('logout','LoginController@getLogout')->name('get.logout');
    Route::get('reset-password','ResetPasswordController@getEmailReset')->name('get.email_reset_password');
    Route::post('reset-password','ResetPasswordController@checkEmailResetPassword');

    Route::get('new-password','ResetPasswordController@newPassword')->name('get.new_password');
    Route::post('new-password','ResetPasswordController@savePassword');

    Route::get('/{social}/redirect', 'SocialAuthController@redirect')->name('get.login.social');
    Route::get('/{social}/callback', 'SocialAuthController@callback')->name('get.login.social_callback');
});

// Login admin
Route::group(['prefix' => 'admin-auth','namespace' => 'Admin\Auth'], function() {
    Route::get('login','AdminLoginController@getLoginAdmin')->name('get.login.admin');
    Route::post('login','AdminLoginController@postLoginAdmin');

    Route::get('logout','AdminLoginController@getLogoutAdmin')->name('get.logout.admin');
});


Route::group(['namespace' => 'Frontend'], function() {
    Route::get('','HomeController@index')->name('get.home');
    Route::get('ajax-load-product-recently','HomeController@getLoadProductRecently')->name('ajax_get.product_recently');
    Route::get('ajax-load-product-by-category','HomeController@getLoadProductByCategory')->name('ajax_get.product_by_category');
    Route::get('ajax-load-slide','HomeController@loadSlideHome')->name('ajax_get.slide');
    Route::get('san-pham','ProductController@index')->name('get.product.list');
    Route::get('danh-muc/{slug}','CategoryController@index')->name('get.category.list');
    Route::get('san-pham/{slug}','ProductDetailController@getProductDetail')->name('get.product.detail');
    Route::get('san-pham/{slug}/danh-gia','ProductDetailController@getListRatingProduct')->name('get.product.rating_list');

    Route::get('bai-viet','BlogController@index')->name('get.blog.home');
    Route::get('menu/{slug}','BlogMenuController@getArticleByMenu')->name('get.article.by_menu');
    Route::get('bai-viet/{slug}','ArticleDetailController@index')->name('get.blog.detail');
    // GIỏ hàng
    Route::get('don-hang','ShoppingCartController@index')->name('get.shopping.list');
    Route::prefix('shopping')->group(function () {
        Route::get('add/{id}','ShoppingCartController@add')->name('get.shopping.add');
        Route::get('delete/{id}','ShoppingCartController@delete')->name('get.shopping.delete');
        Route::get('update/{id}','ShoppingCartController@update')->name('ajax_get.shopping.update');
        Route::get('theo-doi-don-hang','TrackOrderController@index')->name('get.track.transaction');
        Route::post('pay','ShoppingCartController@postPay')->name('post.shopping.pay');
        Route::get('update/cart/discount','ShoppingCartController@cartDiscount')->name('ajax_get.update.cart.discount');
        Route::get('hook','ShoppingCartController@hookCallback')->name('get.shopping.callback');
    });

    //Comment
    Route::group(['prefix' => 'comment', 'middleware' => 'check_user_login'], function(){
        Route::post('ajax-comment','CommentsController@store')->name('ajax_post.comment');
    });

    Route::get('lien-he','ContactController@index')->name('get.contact');
    Route::post('lien-he','ContactController@store');
    Route::get('san-pham-ban-da-xem','PageStaticController@getProductView')->name('get.static.product_view');
    Route::get('ajax/san-pham-ban-da-xem','PageStaticController@getListProductView')->name('ajax_get.product_view');
    Route::get('huong-dan-mua-hang','PageStaticController@getShoppingGuide')->name('get.static.shopping_guide');
    Route::get('chinh-sach-bao-hanh','PageStaticController@getReturnPolicy')->name('get.static.return_policy');
    Route::get('cham-soc-khach-hang','PageStaticController@getCustomerCare')->name('get.static.customer_care');



    Route::get('ajax/load-document','PageStaticController@getDocumentAjax')->name('get_ajax.static.document');
    Route::get('demo/view-file','PageStaticController@getDemoViewFile');
});

Route::group(['prefix' => 'test','namespace' => 'Test'], function(){
	Route::get('hoa-don-ban','TestController@index');
});



include 'route_api.php';

Route::get('/home', 'HomeController@index')->name('get.home');
