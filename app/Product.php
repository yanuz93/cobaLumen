<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_detail_id', 'size_id', 'price'
    ];

    public function productDetail()
    {
        return $this->belongsTo('App\ProductDetail');
    }

    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
