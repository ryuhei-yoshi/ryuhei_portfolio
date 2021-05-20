<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'area', 'adress', 'category', 'old', 'image_url'
    ];

}
