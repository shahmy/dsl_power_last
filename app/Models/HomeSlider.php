<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeSlider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'image',
        'button_name',
        'button_url',
        'video_url',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'home_sliders';

    protected $casts = [
        'status' => 'boolean',
    ];
}
