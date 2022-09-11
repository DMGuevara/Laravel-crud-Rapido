<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    static $rules = [
		'description' => 'required',
		'price' => 'required',
		'stock' => 'required',
    ];

    protected $fillable = ['description','price','stock'];
}
