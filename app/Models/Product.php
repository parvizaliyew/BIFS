<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements ITranslatable
{
    use HasFactory;
    protected  $fillable=
        [
          'title',
          'desc',
          'slug',
          'img',
          'images' 
        ];
    protected $casts = [
        'title'=>'array',
        'desc'=>'array',
        'slug'=>'array',
    ];

    public function translate(string $attr)
    {
        return json_decode($this->{$attr})->{app()->getLocale()};
    }
}
