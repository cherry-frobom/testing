<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductSetting;

class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$products = Product::orderBy('id', 'DESC')->paginate(5);

		return view('products.index', ['products' => $products]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		// $columns= \DB::connection()->getSchemaBuilder()->getColumnListing("product_settings");
		// $nameType = array();

		// foreach ($columns as $key => $value) {
		// 	$column = \DB::connection()->getSchemaBuilder()->getColumnType("product_settings", $value);
		// 	if($value != 'id' && $value != 'product_id' && $value != 'created_at' && $value != 'updated_at')
		// 	$nameType[$value] = $column;
		// }
		$productSettings = ProductSetting::all();
		return view('products.create', ['productSettings' => $productSettings]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'product_code' => 'required',
		]);
		$product = new Product;
		$product->product_code = $request->product_code;
		$product->name = $request->name;
		$product->price = $request->price;
		$product->category = $request->category;
		$product->description = $request->description;
		$product->save();

		$product = Product::find($product->id);
		$product_settings = ProductSetting::all();

		$array = array();

		for ($i=0; $i < count($request->ppsvalue) ; $i++) {
			$array[$product_settings[$i]->id] = ['value' => $request->ppsvalue[$i]];
		}

		$product->product_settings()->sync($array);
		return redirect()->route('products.index')->with('success', 'Product ProductSetting created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
