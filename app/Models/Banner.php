<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [

        'name' => 'nullable|min:2',
        'description' => 'nullable|min:2',
        'created_at' => 'nullable',
        'is_active' => 'nullable',
    ];
}
