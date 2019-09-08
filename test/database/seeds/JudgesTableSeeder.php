<?php

use Illuminate\Database\Seeder;

class JudgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()//first_nameが名前　last_nameが苗字
    {
        for($i = 0 ; $i < 4; $i++){
            DB::table('judges')->insert([
                [
                    'first_name' => '名前1',
                    'last_name' => '苗字1',
                    'groups_id' => '1',
                    'number' => 'T0000',
                    'password' => 'takarug1001'
                ],
                [
                    'first_name' => '名前2',
                    'last_name' => '苗字2',
                    'groups_id' => '2',
                    'number' => 'W0000',
                    'password' => 'takarug1002'
                ],
                [
                    'first_name' => '名前3',
                    'last_name' => '苗字3',
                    'groups_id' => '3',
                    'number' => 'F0000',
                    'password' => 'takarug1003'
                ]
            ]);
        }

    }
}