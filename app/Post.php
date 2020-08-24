<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // create a fillable array so laravel knows what is updateable (mass-assignable) in the database
    // https://laravel.com/docs/7.x/eloquent#mass-assignment
    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'published_at'
    ];

    // always make sure published_at is a date
    // https://laravel.com/docs/7.x/eloquent-mutators#date-mutators
    protected $dates = [
        'published_at'
    ];
}
