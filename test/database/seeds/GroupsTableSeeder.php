<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([

            [
                'name' => '火曜日'
            ],
            [
                'name' => '水曜日'
            ],
            [
                'name' => '金曜日'
            ],
        ]);
    }
}

