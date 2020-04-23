<?php
Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {
    Route::get('/hello-world', 'VendorName\PackageName\Http\Controllers\Shop\HelloWorldController@index')->name('helloworld.shop.index');
});
