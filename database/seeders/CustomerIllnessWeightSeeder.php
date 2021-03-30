<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\CustomerIllnessWeight;

class CustomerIllnessWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerIllnessWeight::Create([
            'CustomerID' => 1,
            'Weight_CI' => 0.6,
            'Weight_GI' => 0.3,
            'Weight_MI' => 0.1,
        ]);
    }
}
