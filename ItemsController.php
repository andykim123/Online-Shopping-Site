<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Input;

class ItemsController extends Controller
{

	//For associating with user
	// public function __construct()
	// {
	// 	$this->middleware('auth')->except(['index','show']);
	// }

	public function index()
	{
		$items = Item::all();

		return view('items.index',compact('items'));
	}

	public function show(Item $item)
	{
		return view('items.show',compact('item'));
	}

	public function create()
	{
		return view('items.create');
	}

	// public function purchase()
	// {
	// 	return view('items.purchase');
	// }

	public function store()
	{
		 
	
		$this->validate(request(), [
				'username' => 'required',
				'price' => 'required',
				'description' => 'required',
				'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

			]
			);

		 $item = new Item;
		 $item->username = request('username');
		 $item->price = (int)request('price');
		 $item->description = request('description');


		 $destinationPath = public_path('/images');

		if (request()->hasFile('image')) {
	
			$image = request()->file('image');

   			$imagename = $image->getClientOriginalName();

   		 	$destinationPath = public_path('/images');

    		$image->move($destinationPath, $imagename);

    		$url = "/images/".$imagename;


		}
		
		$item->image = $url;
		//'user_id' => auth()->user()->id; for user associate
		$item->user_id = 3;
		$item->save();

		return redirect('/');
}
}


    	// $destinationPath = public_path('/images');

    	// $image->move($destinationPath, $input['imagename']);

    	// $filepath = '/public'.'/images'.

		// $item->save();

		// return redirect('/');




				// $item->save();

		// return redirect('/');
	
// 	public function index()
// 	{
// 		$items = Item::all();

//     	return view('items.index',compact('items'));
// 	}
//     

//     public function show(Item $item)
//     {
//     	// $item = Item::find($id);
//     	return view('items.show',compact('item'));
//     }
 
