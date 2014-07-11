<?php
/*
|--------------------------------------------------------------------------
| Wechat Routes
|--------------------------------------------------------------------------
*/

// 测试
//
Route::post('api/wechat/test', array(
    'as'     => 'wechat.test',
    'uses'   => 'Cooper\Wechat\Controllers\WechatController@test',
));

