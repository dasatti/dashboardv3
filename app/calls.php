<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calls extends Model
{
    public function customer(){
			return $this->belongsTo('App\Customers');
		}
	
	
}
