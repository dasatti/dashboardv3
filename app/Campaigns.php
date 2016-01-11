<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
			'clients_id',
			'name',
			'gsm_number',
			'unbounce_id',
			'ga_view_id',
			'start_date',
			'end_date',
			'campaigns_login',
			'campaigns_password',
			'notify_email',
			'noreply_email',
    ];
	//
	public function user(){		
		return $this->belongsTo('App\User','clients_id','id');
	}
}
