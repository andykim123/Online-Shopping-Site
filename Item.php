<?php

namespace App;


class Item extends Model
{

	public function comments(){

	return $this->hasMany(Comment::class);
    //
}

	public function purchases(){
		return $this->hasMany(Purchase::class);
	}
	//for user association
	// public function user()
 //    {
 //    	return $this->belongTO(User::class);
 //    }

	public function addComment($body)
	{
		Comment::create([
			'body' => $body,
			'item_id' => $this->id


			]);
	}


	public function addPurchase()
	{
		Purchase::create([
			'item_id' => $this->id
			// 'user_id' user associate

			]);
	}
}
