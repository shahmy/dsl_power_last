<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'post_id',
        'project_id',
        'product_id',
        'name',
        'description',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
