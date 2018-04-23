<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	public function product_settings()
	{
		return $this->belongsToMany('App\ProductSetting', 'product_product_settings', 'product_id', 'product_setting_id');
	}

}
