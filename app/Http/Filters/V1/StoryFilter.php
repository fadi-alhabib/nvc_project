<?php

namespace App\Http\Filters\V1;

class StoryFilter extends QueryFilter{
    protected $sortable = [
        'clicks',
        'teller',
        'title',
        'createdAt' => 'created_at'
    ];


    public function clicks($value){
        $values = explode(',', $value);
        if(count($values) > 1){
            return $this->builder->whereBetween('clicks', $values);
        }
        return $this->builder->where('clicks', $values);
    }

    public function title($value){
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('title', 'like', $likeStr);
    }

    public function body($value){
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('body', 'like', $likeStr);
    }

    public function teller($value){
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('teller', 'like', $likeStr);
    }

    public function createdAt($value){
        $dates = explode(',', $value);

        if(count($dates)){
            return $this->builder->whereBetween('created_at', $dates);
        }

        return $this->builder->where('created_at', $dates);
    }

    

}