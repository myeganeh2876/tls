<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('f_a_q_s')->insert([
            ['title' => 'شهریه باشگاه از اونی که خودمون میریم گرون تر میفته؟', 'content' => 'خیر ما یجوری قرارداد میبندیم که یا گرون تر نمیفته یا اگه بیفته در حد جلسه ای ۱۰ هزار تومنه که پول آبم نیست گدای بدبخت گشنه'],
            ['title' => 'رفتم باشگاه رام نداد چی؟', 'content' => 'زنگ میزنی به ما بعد ما زنگ میزنیم بهش تو گوشش یه چیزی میگیم رات میده'],
        ]);
    }
}
