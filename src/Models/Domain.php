<?php

namespace Goyne\EasyCache\Models;

class Domain extends BaseModel
{
    protected $table = 'goyne_easycache_domains';

    protected $cacheKey = 'domains';

    public $cacheBy = 'slug';

    public $timestamps = false;

    public function slug()
    {
        return $this->select('*');
    }

    public function items()
    {
    	return $this->hasMany('\Goyne\EasyCache\Models\Item');
    }

    public function comments()
    {
        return $this->hasMany('\Goyne\EasyCache\Models\Comment');
    }

    public function recountItems()
    {
        return $this->items()->active();
    }

    public function recountComments()
    {
        return $this->comments()->active();
    }
}
