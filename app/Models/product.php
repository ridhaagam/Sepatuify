<?php

namespace App\Models;

use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    
    public $primaryKey = 'id';
    protected $fillable = [
        'name','description', 'price','url', 'slug'
    ];    

    static function getProduct(){
        $return=DB::table('products')
        ->join('product_galleries','products.id', '=', 'product_galleries.products_id');
        return $return;
    }

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }
}
