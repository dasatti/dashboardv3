<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    //
	public function user(){		
		return $this->belongsTo('App\User','clients_id','id');
	}
}
