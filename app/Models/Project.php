<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model implements ITranslatable
{
    use HasFactory;

    protected $casts = [
        'slug'=>'array',
        'title'=>'array',
        'desc'=>'array'
    ];

    public function translate(string $attr)
    {
        return json_decode($this[$attr])->{app()->getLocale()};
    }
}
