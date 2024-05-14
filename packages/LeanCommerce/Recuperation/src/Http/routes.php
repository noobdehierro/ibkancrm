<?php

Route::group([
        'prefix'        => 'admin/recuperation',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Recuperation\Http\Controllers\RecuperationController@index')->name('admin.recuperation.index');

});