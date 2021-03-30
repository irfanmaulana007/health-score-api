<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MentalIllnessICD;
use App\Models\MentalIllnessList;

class MentalIllnessController extends Controller
{
    public function getMentalICD() {
        $data = MentalIllnessICD::all();

        return response()->json($data);
    }

    public function getMentalList() {
        $data = MentalIllnessList::all();

        return response()->json($data);
    }
}
