<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1,
                'ticket_id' => 1,
                'status_id' => 1,
            ],
            [
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1,
                'ticket_id' => 1,
                'status_id' => 2,
            ],
        ]);
    }
}
