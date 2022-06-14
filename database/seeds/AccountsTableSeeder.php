<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Account::create([
        	'name'=>'tarek',
            'address'=>'uttara',
            'types'=>'life insurance',
            'mobile'=>'0000000000000',
            'email'=>'tarek@ff.com',
            'duration'=>5,
            'amount'=>3.20

        ]);
    }
}
