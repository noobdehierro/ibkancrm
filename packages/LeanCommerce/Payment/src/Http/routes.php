<?php

Route::group([
        'prefix'        => 'admin/payment',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'LeanCommerce\Payment\Http\Controllers\PaymentController@index')->name('admin.payment.index');

});