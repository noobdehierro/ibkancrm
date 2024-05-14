<?php

Route::group([
        'prefix'        => 'admin/statusnotification',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\StatusNotification\Http\Controllers\StatusNotificationController@index')->name('admin.statusnotification.index');

});