<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriticalIllnessList extends Model
{
    use HasFactory;

    protected $table = 'Critical_Illness_list';

    protected $fillable = ['CustomerID', 'IllnessCode', 'Weight'];
}
