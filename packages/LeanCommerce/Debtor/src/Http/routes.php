<?php

Route::group([
        'prefix'        => 'admin/debtor',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Debtor\Http\Controllers\DebtorController@index')->name('admin.debtor.index');

});