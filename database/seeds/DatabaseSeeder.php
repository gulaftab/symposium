<?php

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call('UsersSeeder');
        $this->call('TalksSeeder');
        $this->call('ConferencesSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
