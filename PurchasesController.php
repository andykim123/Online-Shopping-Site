<?php

namespace App\Http\Controllers;


use App\Item;

use App\Purchase;

class PurchasesController extends Controller
{
    //

    public function process(Item $item){

		return view('items.purchase',compact('item'));
    }

    public function store(Item $item){

    	$purchase = new Purchase;

    	$purchase->item_id = $item->id;

    	$purchase->user_id = 3;

    	$purchase-> save();

    	return redirect('/');

    }
}
