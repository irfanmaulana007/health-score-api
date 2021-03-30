<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentalIllnessList extends Model
{
    use HasFactory;

    protected $table = 'Mental_Illness_list';

    protected $fillable = ['CustomerID', 'IllnessCode', 'Weight'];
}
