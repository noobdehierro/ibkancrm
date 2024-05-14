<?php

Route::group([
        'prefix'        => 'admin/help',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Help\Http\Controllers\HelpController@index')->name('admin.help.index');

});