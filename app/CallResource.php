<?php

namespace App;

use App\Campaign;
use DB;

class CallResource extends Call {

    protected $campaig;
    protected $client;
    protected $from;
    protected $to;


    public function __construct() {
        $this->table = 'calls';
        $this->from = '0000-00-00';
        $this->to = '0000-00-00';
    }

    

    public function setCampaign(Campaign $campaign){
        //if($campaign instanceof Campaign)
            $this->campaign = $campaign;
    }
    
    public function setClient(App\User $client){
        //if($client instanceof App\User)
            $this->client = $client;
    }
    
    public function setFrom($from){
        $this->from = $from;
    }
    
    public function setTo($to) {
        $this->to = $to;
    }

    public function getCalls(){
        $calls_query = DB::table($this->table);
        if($this->from!='0000-00-00'){
            $calls_query->where('call_start','>=',$this->from);
        }
        if($this->to!='0000-00-00'){
            $calls_query->where('call_end','<=',$this->to);
        }
        $calls = $calls_query->get();
        
        //print_r(\DB::getQueryLog());die;
        return $calls;
    }

	
}



