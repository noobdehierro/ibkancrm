<?php

Route::group([
        'prefix'        => 'admin/unknown',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Unknown\Http\Controllers\UnknownController@index')->name('admin.unknown.index');

});