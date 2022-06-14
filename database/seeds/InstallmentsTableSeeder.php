<?php

use Illuminate\Database\Seeder;

class InstallmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 App\Models\Installment::create([
        	'account_num'=>'1991',
    	'month'=>'january',
    	'amount'=>10000,
    	'date'=>'5th feb',
    	'account_type'=>'nai'

        ]);
    }
}
