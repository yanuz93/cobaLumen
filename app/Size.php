<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    public function product()
    {
        return $this->hasMany('App\Product');
    }

}
