<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::first()->users()->create([
            'name' => 'Tobias Nagel',
            'email' => 'tobias.nagel@mintellity.com',
            'password' => bcrypt('mint2222'),
        ]);
    }
}
