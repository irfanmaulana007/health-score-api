<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GeneralIllnessICD;
use App\Models\GeneralIllnessList;

class GeneralIllnessController extends Controller
{
    public function getGeneralICD() {
        $data = GeneralIllnessICD::all();

        return response()->json($data);
    }

    public function getGeneralList() {
        $data = GeneralIllnessList::all();

        return response()->json($data);
    }
}
