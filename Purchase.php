<?php

namespace App;

class Purchase extends Model
{
    //
    public function item()
	{
		return $this->belongsTo(Item::class);
	}
    //
    // public function user()
    // {
    // 	return $this->belongTO(User::class);
    // }
}
