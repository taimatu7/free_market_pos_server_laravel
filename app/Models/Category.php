<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Category extends Model
{
    protected $fillable = [
        'name',
    ];
    
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
