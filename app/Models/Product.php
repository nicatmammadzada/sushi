<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;
    protected $table = 'product';
    public $timestamps = true;
    use SoftDeletes;
    public $translatable = ['name','slug','description','ingredient'];
    protected  $guarded=[];

    public function category()
    {
        return $this->belongsTo(Product::class, 'category_id');
    }


    public function product_updated_at()
    {
        $date=\Carbon\Carbon::parse($this->updated_at);
        return $date->isoFormat('MMM D YYYY');
    }

    public  function promo()
    {
        return $this->hasMany(Promocode::class,'product_id');
    }


}
