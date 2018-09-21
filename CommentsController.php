<?php

namespace App\Http\Controllers;

use App\Item;


use App\Comment;

class CommentsController extends Controller
{

	public function store(Item $item)
	{

		$this->validate(request(),['body' => 'required|min:2']);

		$item->addComment(request('body'));
		// Comment::create([

		// 	'body' => request('body'),

		// 	'item_id' => $item -> id

		// 	]);

		return back(); 
	}


    //
}
