<?php

namespace App\Http\Controllers\api_v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class ApiPostController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$categories = Category::all();
		return response()->json(
			array(
				'success' => 'Category list',
				'data' => $categories
			)
		);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$category = new Category;
		$category->name = $request->name;
		$category->description = $request->description;
		$category->save();
		return response()->json(
			array(
				'success' => true,
				'data' => $category,
				'message' => 'Category created'
			)
		);
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
		$category = Category::find($id);
		$category->name = $request->name;
		$category->description = $request->description;
		$category->save();
		return response()->json(
			array(
				'success' => true,
				'data' => $category,
				'message' => 'Category updated'
			)
		);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if($id) {
			$category = Category::find($id);
			if($category) {
				$category->delete();
				return response()->json(
					array(
						'success' => true,
						'message' => 'Category deletes'
					)
				);
			}
		}
	}
}
