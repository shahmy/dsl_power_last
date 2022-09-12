<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactPage extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'google_map',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'contact_pages';
}
