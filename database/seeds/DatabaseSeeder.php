<?php

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
        DB::table('months')->insert([
            'id' => '1',
            'months_name' => 'January',
        ]);

        DB::table('months')->insert([
            'id' => '2',
            'months_name' => 'February',
        ]);

        DB::table('months')->insert([
            'id' => '3',
            'months_name' => 'March',
        ]);

        DB::table('months')->insert([
            'id' => '4',
            'months_name' => 'April',
        ]);

        DB::table('months')->insert([
            'id' => '5',
            'months_name' => 'May',
        ]);

        DB::table('months')->insert([
            'id' => '6',
            'months_name' => 'June',
        ]);

        DB::table('months')->insert([
            'id' => '7',
            'months_name' => 'July',
        ]);

        DB::table('months')->insert([
            'id' => '8',
            'months_name' => 'August',
        ]);

        DB::table('months')->insert([
            'id' => '9',
            'months_name' => 'September',
        ]);

        DB::table('months')->insert([
            'id' => '10',
            'months_name' => 'October',
        ]);

        DB::table('months')->insert([
            'id' => '11',
            'months_name' => 'November',
        ]);

        DB::table('months')->insert([
            'id' => '12',
            'months_name' => 'December',
        ]);


        DB::table('calendar_types')->insert([
            'id' => '1',
            'calendar_type' => 'English',
        ]);

        DB::table('calendar_types')->insert([
            'id' => '2',
            'calendar_type' => 'Bengali',
        ]);

        DB::table('calendar_types')->insert([
            'id' => '3',
            'calendar_type' => 'Hizri',
        ]);
    }
}
