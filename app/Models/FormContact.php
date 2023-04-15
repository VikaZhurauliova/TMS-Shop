<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject',
        'email',
        'message',
        'file_name',
        'file_size',
        'file_type'
    ];
}
