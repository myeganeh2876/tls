<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['title' => 'تردمیل'],
            ['title' => 'الپتیکل'],
            ['title' => 'وزنه های سنگین'],
            ['title' => 'وزنه های سبک'],
            ['title' => 'تجهیزات ایروبیک'],
            ['title' => 'دوش'],
            ['title' => 'بوفه'],
        ]);
    }
}
