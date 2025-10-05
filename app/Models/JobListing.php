<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobListing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
    use HasFactory;

    public static array $experience = ['entry', 'intermediate', 'senior'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
