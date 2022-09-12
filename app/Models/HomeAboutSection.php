<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeAboutSection extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'heading',
        'sub_heading',
        'description',
        'image',
        'image_title',
        'button_name',
        'button_link',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'home_about_sections';
}
