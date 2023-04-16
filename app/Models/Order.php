<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'first_name',
        'last_name',
        'address'
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

//    public function orderProduct(): BelongsToMany
//    {
//        return $this->belongsToMany(OrderProduct::class);
//    }
}
