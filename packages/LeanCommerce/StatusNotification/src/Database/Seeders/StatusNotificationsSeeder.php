<?php

namespace LeanCommerce\StatusNotification\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use LeanCommerce\StatusNotification\Models\StatusNotification;

class StatusNotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Add seeder code here
        $status = [
            [
                'name' => 'selected',
                'description' => 'this is selected status'
            ],
            [
                'name' => 'notified',
                'description' => 'this is notified status'
            ],


        ];

        foreach ($status as $value) {
            StatusNotification::create($value);
        }
    }
}
