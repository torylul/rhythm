<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_dates')->insert([
            [
                'date' => new \DateTime('2023-01-23 16:00:00'),
                'account_id' => 1,
            ],
            [
                'date' => new \DateTime('2023-01-25 16:00:00'),
                'account_id' => 1,
            ],
            [
                'date' => new \DateTime('2023-01-26 16:00:00'),
                'account_id' => 1,
            ],
        ]);
    }
}
