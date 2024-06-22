<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'phone' => '09357557665',
                'first_name' => 'محمد',
                'last_name' => 'یگانه',
                'father_name' => 'مسعود',
                'national_code' => '4271128767',
                'address' => 'تهران، سردار جنگل شمالی، خیابان پنج تن',
                'active' => 1
            ]
        ]);
    }
}
