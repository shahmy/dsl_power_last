<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartnerPage extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'slug',
        'url',
        'title_bg_image',
        'title_description',
        'description',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'partner_pages';
}
