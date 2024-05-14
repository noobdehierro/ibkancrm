<?php

Route::group([
        'prefix'        => 'admin/agreement',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Agreement\Http\Controllers\AgreementController@index')->name('admin.agreement.index');

});