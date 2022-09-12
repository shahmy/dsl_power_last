<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['gallery_id', 'video_url', 'status'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
