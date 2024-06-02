<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $brand_id
 * @property $nama
 * @property $slug
 * @property $rgks
 * @property $ktrg
 * @property $acak
 * @property $pub
 * @property $created_at
 * @property $updated_at
 *
 * @property Brand $brand
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['brand_id', 'nama', 'slug', 'rgks', 'ktrg', 'acak', 'pub'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(\App\Models\Brand::class, 'brand_id', 'id');
    }
    
}
