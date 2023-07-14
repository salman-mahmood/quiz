<?php

namespace App\Models;

use App\Services\quiz2\PostObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    public static function boot(){

        parent::boot();
        static::observe(PostObserver::class);
    }
}
