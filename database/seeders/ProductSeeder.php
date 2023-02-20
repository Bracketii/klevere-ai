<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product=[
        [
          'name'=>'Basic',
          'price'=>10,
          'word_limit'    => 1000,
        ],
        [
          'name'=>'Standard',
          'word_limit'    => 2000,
          'price'=>20,
        ],
        [
          'name'=>'Premium',
          'word_limit'    => 3000,
          'price'=>30
        ],


      ];
            foreach($product as $product){
                Product::create($product);
            }
    }
}
