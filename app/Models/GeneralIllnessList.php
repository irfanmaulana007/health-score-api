<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralIllnessList extends Model
{
    use HasFactory;

    protected $table = 'General_Illness_list';

    protected $fillable = ['CustomerID', 'IllnessCode', 'Weight'];
}
