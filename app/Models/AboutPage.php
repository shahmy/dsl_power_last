<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutPage extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'slug',
        'url',
        'description',
        'title_bg_image',
        'title_description',
        'featured_image',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'about_pages';
}
