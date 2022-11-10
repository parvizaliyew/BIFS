<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model implements ITranslatable
{
    use HasFactory;

    protected  $fillable=
        [
          'email',
          'adress',
          'phone_1',
          'phone_2',
          'fb',
          'ins' 
        ];
    protected $casts = [
        'adress'=>'array',
    ];
    public function translate(string $attr)
    {
        return json_decode($this->{$attr})->{app()->getLocale()};
    }
}
