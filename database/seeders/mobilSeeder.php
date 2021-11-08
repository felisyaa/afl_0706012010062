<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class mobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobils')->insert([
            'merk'=>'a',
            'nama'=>'b',
            'plat'=>'c',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
