<?php

namespace Database\Seeders;

use App\Models\Monitor;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class MonitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Monitor::create([
            'tenant_id' => Tenant::first()->getKey(),
            'name' => 'Google Test Monitor',
            'target' => 'https://www.google.com',
            'creator_id' => User::all()->random()->getKey()
        ]);

        Monitor::create([
            'tenant_id' => Tenant::first()->getKey(),
            'name' => 'Bing Test Monitor',
            'target' => 'https://www.bing.com',
            'creator_id' => User::all()->random()->getKey()
        ]);
    }
}
