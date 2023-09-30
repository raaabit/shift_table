<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shift_hopes')->insert([
                'date' => '当番の日付',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);        //
    }
}
