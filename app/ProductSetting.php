<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSetting extends Model
{
	protected $table = "product_settings";

	public function products()
	{
		return $this->belongsToMany('App\Product', 'product_product_settings', 'product_setting_id', 'product_id');
	}
}
