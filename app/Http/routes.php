<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/11
 * Time: 下午 12:41
 */
Route::get('/',['as'=>'home.index','uses'=>
    'HomeController@index']);