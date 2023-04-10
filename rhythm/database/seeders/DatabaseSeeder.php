<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
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
        $this->call([
            CoacheSeeder::class,
            DaySeeder::class,
            HallSeeder::class,
            TicketSeeder::class,
            StatusSeeder::class,
            PageSeeder::class,
            SectionSeeder::class,
            ItemSectionSeeder::class,
            GroupSeeder::class,
            StructureSeeder::class,
            ShaduleSeeder::class,
//            AccountSeeder::class,
//            AccountDateSeeder::class,
        ]);
    }
}
