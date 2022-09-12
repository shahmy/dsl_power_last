<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['gallery_id', 'image', 'status'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
