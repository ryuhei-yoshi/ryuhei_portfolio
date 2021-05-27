<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\User;

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

    public function admin()
    {
        return $this->blongsTo(Admin::class);
    }

    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'cat_id', 'user_id')->withTimestamps();
    }
}
