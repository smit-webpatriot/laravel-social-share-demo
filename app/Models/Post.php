<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jorenvh\Share\ShareFacade;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    protected $appends = [
        'social_share'
    ];

    protected function getSocialShareAttribute()
    {
        return ShareFacade::page(route('posts.show', $this->id), $this->title)
            ->facebook()
            ->twitter()
            ->linkedin()
            ->getRawLinks();
    }
}
