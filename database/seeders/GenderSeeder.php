<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'Male'],
            ['name' => 'Female'],
        ];

        foreach ($datas as $data) {
            DB::table('genders')->insert($data);
        }
    }
}
