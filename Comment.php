<?php

namespace App;


class Comment extends Model
{

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
    //
    public function user()
    {
    	return $this->belongTO(User::class);
    }
}
