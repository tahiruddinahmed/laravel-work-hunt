<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public static array $categories = [
        'Technology & IT',
        'Finance & Accounting',
        'Sales & Business Development',
        'Education & Training'
    ];

    public function jobs(): HasMany {
        return $this->hasMany(JobListing::class);
    }
}
