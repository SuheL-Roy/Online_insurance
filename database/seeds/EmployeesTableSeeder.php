<?php
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'type'=>'manager',
        ]);

        Employee::create([
            'type'=>'accountant',
        ]);

        Employee::create([
            'type'=>'desk_officer',
        ]);
    }
}
