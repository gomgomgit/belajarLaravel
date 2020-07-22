<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
	protected $fillable = [
		'name', 'category', 'stock', 'status', 'price', 'image',
	];
}
