<?php

Route::group([
        'prefix'        => 'admin/statushistory',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\StatusHistory\Http\Controllers\StatusHistoryController@index')->name('admin.statushistory.index');

});