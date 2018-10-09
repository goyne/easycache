<?php

namespace Goyne\EasyCache\Models;

class Comment extends BaseModel
{
    protected $table = 'goyne_easycache_comments';

    protected $cacheKey = 'comments';

    public function id()
    {
    	return $this->select('*');
    }
}