<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Promocode extends Model
{

    protected $table = 'promocode';
    public $timestamps = false;
    use SoftDeletes;
    protected  $fillable=['code','start_date','end_date','product_id'];

    public function category()
    {
        return $this->belongsTo(Product::class, 'category_id');
    }


    public function product_updated_at()
    {
        $date=\Carbon\Carbon::parse($this->updated_at);
        return $date->isoFormat('MMM D YYYY');
    }


}
