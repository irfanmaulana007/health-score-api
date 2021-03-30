<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerIllnessWeight extends Model
{
    use HasFactory;

    protected $table = 'Customer_IllnessWeight';

    protected $fillable = ['CustomerID', 'Weight_CI', 'Weight_GI', 'Weight_MI'];
}
