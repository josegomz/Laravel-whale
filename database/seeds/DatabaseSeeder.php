<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	/*llama a los seeders para crear los roles y usuarios de prueba*/
         $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(ReservationTableSeeder::class);
    }
}
