<?php

namespace LaravelForum;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'channel_id'];

    public function author() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     *  Use slug instead of id to find the discussion 
     */
    public function getRouteKeyName()
    {
        return 'slug';                                                                                                                                                                                                                                         
    }
}
