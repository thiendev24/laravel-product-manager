<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Product extends Model
{
    use HasFactory, SoftDeletes;

    // private int $id;
    // private string $title;
    // private string $status;
    // private string $description;
    // private string $unit;
    // private int $category_id;
    // private int $brand_id;

    protected $table = 'products';
    protected $dates = ['deleted_at'];

    public function media()
    {
        return $this->belongsTo('App\Models\Media', 'medias');
    }

    public function brand()
    {
        return $this->hasMany('App\Models\Brand', 'fk_product_brand');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Category', 'fk_product_category');
    }
}
