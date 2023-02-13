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
                'price'=>10
              ],
              [
                'name'=>'Standard',
                'price'=>20
              ],
              [
                'name'=>'Premium',
                'price'=>30
              ],


            ];
            foreach($product as $product){
                Product::create($product);
            }
    }
}
