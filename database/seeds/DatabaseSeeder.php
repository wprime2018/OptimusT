<?php

use Illuminate\Database\Seeder;
use App\Models\adresses;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);

    }
}
