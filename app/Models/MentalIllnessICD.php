<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentalIllnessICD extends Model
{
    use HasFactory;

    protected $table = 'Mental_IllnessICD';

    protected $fillable = ['10ClassKind', '10DepthInKind', 'icd10Code', 'icd10Chapter', 'icd10Title', 'illness'];
}
