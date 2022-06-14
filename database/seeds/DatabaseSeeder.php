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
       /* // $this->call(UsersTableSeeder::class);
        $this->call(AccountsTableSeeder::class);

        $this->call(InstallmentsTableSeeder::class);*/

        $this->call(UsersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
    }
}
