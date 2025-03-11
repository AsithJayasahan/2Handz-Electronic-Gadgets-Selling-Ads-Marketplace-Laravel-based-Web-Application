<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID',
        'category',
        'brand',
        'model',
        'price',
        'condition',
        'description',
        'image1',
        'image2',
        'image3',
        'location',
        'contactName',
        'contactNumber'
    ];

}
