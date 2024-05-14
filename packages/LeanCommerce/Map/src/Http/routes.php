<?php

Route::group([
        'prefix'        => 'admin/map',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Map\Http\Controllers\MapController@index')->name('admin.map.index');

});