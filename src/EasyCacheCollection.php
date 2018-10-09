<?php

namespace Goyne\EasyCache;

class EasyCacheCollection extends \Illuminate\Database\Eloquent\Collection
{
    public function recount($field, $relation = null)
    {
        foreach ($this->items as $item) {
            $item->recount($field, $relation);
        }

        return $this;
    }

    public function reset()
    {
        foreach ($this->items as $item) {
            $item->reset();
        }

        return $this;
    }

    public function flush()
    {
        foreach ($this->items as $item) {
            $item->flush();
        }

        return $this;
    }
}