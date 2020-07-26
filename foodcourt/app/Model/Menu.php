<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'category_id', 'stock', 'status', 'price', 'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
