<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function User(){
		return $this->belongsTo(User::class);
	}
	 public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
