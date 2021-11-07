<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'category_id', 'brand_id', 'status', 'description'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function pictures()
    {
        return $this->belongsToMany(Picture::class);
    }

    public static function search($search){
        return empty($search) ? static::query()
        : static::where('id', 'like', '%'.$search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('price', 'like', '%'.$search.'%');
    }
}
