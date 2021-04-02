<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'Single'],
            ['name' => 'Married'],
            ['name' => 'Divorced'],
            ['name' => 'Separated'],
            ['name' => 'Widowed']
        ];

        foreach ($datas as $data) {
            DB::table('marital_statuses')->insert($data);
        }
    }
}
