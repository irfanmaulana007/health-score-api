<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CustomerIllnessWeight;

class CustomerIllnessWeightController extends Controller
{
    public function getCustomerIllnessWeight() {
        $data = CustomerIllnessWeight::all();

        return response()->json($data);
    }
}
