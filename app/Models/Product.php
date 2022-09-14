<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'product_category_id',
        'name',
        'small_description',
        'detail_description',
        'featured_image',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

}
