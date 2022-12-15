<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PayslipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payslips')->insert([
            [
                'user_id' => '1',
                'month' => '12',
                'year' => '2022',
                'file' => '/payslips/1.pdf',
            ],
        ]);
    }
}
