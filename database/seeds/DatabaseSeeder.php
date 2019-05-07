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
        Eloquent::unguard();
        $breeds = 'database/seeds/breeds.sql';
        DB::unprepared(file_get_contents($breeds));
        $this->command->info('Breeds table seeded!');


        //example data
        //factory(\App\User::class, 20)->make()
    }
}
