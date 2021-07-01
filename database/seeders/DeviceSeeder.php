<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add a single fake record.
        DB::table('devices')->insert(['model'=>'iphone8']);
        // Add multiple random fake record through a model factory (DeviceFactory.php).
        Device::factory()->count(3)->create();
    }
}
