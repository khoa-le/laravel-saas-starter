<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'basic',
            'stripe_price_id' => 'price_1Jfz7pH63Rkx9TRfQUzgYuCk',
            'description' => 'The basic plan allow you to create 1 master'
        ]);

        DB::table('plans')->insert([
            'name' => 'plus',
            'stripe_price_id' => 'price_1Jg2qYH63Rkx9TRfTMV90z8T',
            'description' => 'The plus plan allow you to create 5 masters'
        ]);

        DB::table('plans')->insert([
            'name' => 'pro',
            'stripe_price_id' => 'price_1Jg34hH63Rkx9TRfPzRSJMP7',
            'description' => 'The pro plan allow you to create 10 masters'
        ]);
    }
}
