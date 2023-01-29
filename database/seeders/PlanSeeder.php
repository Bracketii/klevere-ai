<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic Plan', 
                'slug' => 'basic-plan', 
                'stripe_plan' => 'price_1MVDgeGeSSGDH3mH96yCzxcF', 
                'price' => 10, 
                'description' => 'Basic Plan'
            ],
            [
                'name' => 'Standard Plan', 
                'slug' => 'standard-plan', 
                'stripe_plan' => 'price_1MVDhHGeSSGDH3mHc3cGNvQQ', 
                'price' => 20, 
                'description' => 'Standard Plan'
            ],
            [
                'name' => 'Premium Plan', 
                'slug' => 'premium-plan', 
                'stripe_plan' => 'price_1MVDi6GeSSGDH3mHfWJp96b7', 
                'price' => 30, 
                'description' => 'Premium Plan'
            ],
            
        ];
   
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
