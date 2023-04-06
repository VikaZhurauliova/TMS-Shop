<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'description',
        'short_description',
        'price',
        'sale_price',
        'category_id',
        'is_active'
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }

    public function averageReviews(): float
    {
        $reviews = $this->reviews;
        $averageStar = 0;

        /** @var ProductReview $review */
        foreach ($reviews as $review) {
            $averageStar += $review->star_count;
        }

        return (count($reviews) == 0) ? 0 : round($averageStar / count($reviews));
    }

}
