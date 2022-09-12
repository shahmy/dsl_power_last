<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'featured_image',
        'price',
        'title_bg_image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'order_by',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
