<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoadItem extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['appliance_category_id', 'name', 'watts'];

    protected $searchableFields = ['*'];

    protected $table = 'load_items';

    public function applianceCategory()
    {
        return $this->belongsTo(ApplianceCategory::class);
    }
}
