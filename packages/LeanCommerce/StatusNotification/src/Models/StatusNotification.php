<?php

namespace LeanCommerce\StatusNotification\Models;

use Illuminate\Database\Eloquent\Model;
use LeanCommerce\StatusNotification\Contracts\StatusNotification as StatusNotificationContract;

class StatusNotification extends Model implements StatusNotificationContract
{
    protected $fillable = [
        "name",
        "description"
    ];
}
