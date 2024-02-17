<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
	protected $fillable=['name','description','category_id','image','selling_price', 'offer_price','quantity','price','mrp','status'];
	
	 public function category()
    {
      return $this->belongsTo(Category::class);
   }
	
	
}
