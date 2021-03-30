<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CriticalIllnessICD;
use App\Models\CriticalIllnessList;

class CriticalIllnessController extends Controller
{
    public function getCriticalICD() {
        $data = CriticalIllnessICD::all();

        return response()->json($data);
    }

    public function getCriticalList() {
        $data = CriticalIllnessList::all();

        return response()->json($data);
    }
}
