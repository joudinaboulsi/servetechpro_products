<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="products";
   
    protected $fillable = [
        'id',
        'image',
        'background',
        'product_name',
        'desc',
        'title_details',
        'subtitle_details',
        'desc1',
        'tag1',
        'tag2',
        'tag_p1',
        'tag_p2',
        'title_desc2',
        'desc2',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',

    ];



    public function images(){
       return $this->hasMany(Image::class, 'product_id', 'id');
    }
}
