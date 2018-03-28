<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductSetting;

class ProductSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productsettings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request, [
            'setting_name' => 'required',
            'type' => 'required',
            'order_no' => 'required|numeric'
        ]);
        if ($validator->fails()) {
           return response()->json(array(
                'error'=> true,
                'data' => $validator->errors()
           ));
        } else {
            $productsetting = new ProductSetting;
            $productsetting->setting_name = $request->setting_name;
            $productsetting->type = $request->type;
            $productsetting->order_no = $request->order_no;
            $productsetting->save();
            return response()->json(array(
                'success' => true,
                'data' => $productsetting,
                'message' => 'ProductSetting Created'
            ));
        }
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
