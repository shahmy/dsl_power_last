<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name','parent', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'product_categories';

    protected $casts = [
        'status' => 'boolean',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function childrenCategory(){
        return $this->hasMany(ProductCategory::class, 'parent', 'id');
    }

    public function parentCategory(){
        return $this->hasOne(ProductCategory::class, 'id', 'parent');
      }
}
