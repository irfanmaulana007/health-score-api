<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CustomerIllnessWeight;
use App\Models\CriticalIllnessList;
use App\Models\GeneralIllnessList;
use App\Models\MentalIllnessList;

class HealthScoreController extends Controller
{
    public function addIllnessList(Request $request) {
        foreach ($request->critical['illnessSelected'] as $illness) {
            CriticalIllnessList::Create([
                'CustomerID' => 2, // DUMMY
                'IllnessCode' => $illness['value'],
                'Weight' => $illness['weight']
            ]);
        }
        
        foreach ($request->general['illnessSelected'] as $illness) {
            GeneralIllnessList::Create([
                'CustomerID' => 2, // DUMMY
                'IllnessCode' => $illness['value'],
                'Weight' => $illness['weight']
            ]);
        }
        
        foreach ($request->mental['illnessSelected'] as $illness) {
            MentalIllnessList::Create([
                'CustomerID' => 2, // DUMMY
                'IllnessCode' => $illness['value'],
                'Weight' => $illness['weight']
            ]);
        }

        return response()->json('submit data success');
    }

    public function calculateHealthScore(Request $request) {
        CustomerIllnessWeight::Create([
            'CustomerID' => 2, // DUMMY
            'Weight_CI' => $request->critical['illnessWeight'],
            'Weight_GI' => $request->general['illnessWeight'],
            'Weight_MI' => $request->mental['illnessWeight'],
        ]);

        return response()->json('calculate score success');
    }
}
