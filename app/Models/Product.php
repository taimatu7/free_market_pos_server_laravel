<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $description
 * @property string $image_path
 * @property int $category_id
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'image_path',
        'category_id',
    ];
    
    public function inventory(): HasOne
    {
        return $this->hasOne(Inventory::class);
    }
}
