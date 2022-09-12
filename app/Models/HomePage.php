<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePage extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'url',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'home_pages';
}
