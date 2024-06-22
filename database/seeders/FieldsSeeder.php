<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['title' => 'بندسازی'],
            ['title' => 'پیلاتس'],
            ['title' => 'ایروبیک'],
            ['title' => 'CX'],
            ['title' => 'TRX'],
            ['title' => 'زومبا'],
            ['title' => 'یوگا'],
            ['title' => 'فانکشنال'],
        ]);
    }
}
