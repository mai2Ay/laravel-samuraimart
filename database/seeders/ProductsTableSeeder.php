<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DateTime;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10),
                'price' => rand(1, 9) . '000',
                'category_id' => rand(1, 18),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
