<?php

Route::group([
        'prefix'        => 'admin/clarification',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Clarification\Http\Controllers\ClarificationController@index')->name('admin.clarification.index');

});