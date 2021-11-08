<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class pinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pinjams')->insert([
            'namap'=>'aku',
            'ktp'=>'gaada',
            'mobilp'=>'gtw',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
