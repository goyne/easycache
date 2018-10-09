<?php

namespace Goyne\EasyCache\Models;

class Item extends BaseModel
{
    protected $table = 'goyne_easycache_items';

    protected $cacheKey = 'items';

    public function id()
    {
    	return $this->select('*');
    }

    public function slug()
    {
    	return $this;
    }

    public function comments()
    {
    	return $this->hasMany('\Goyne\EasyCache\Models\Comment');
    }

    public function recountComments()
    {
        return $this->comments()->active();
    }
}
