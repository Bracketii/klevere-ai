<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\plan;


class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans=[
            [
               'name'=>'Basic Plan',
               'slug'=>'basic-plan',
               'stripe_plan'=>'price_1MVDgeGeSSGDH3mH96yCzxcF',
               'price'=>10,
               'description'=>'Basic-plan'
            ],

            ];
            foreach($plans as $plan){
                plan::create($plan);
            }
    }
}
