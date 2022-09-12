<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'slug',
        'small_description',
        'detail_description',
        'featured_image',
        'duration',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
