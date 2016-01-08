<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    //

    function total($from,$to)
    {

        $calls_model = $this;

        if($from!='0000-00-00'){
            $calls_model->where('call_start','>=',$from);
        }

        if($to!='0000-00-00'){
            $calls_model->where('call_end','<=',$to);
        }

        return $calls_model->count('*');
    }

    public function scopeFrom($query,$from){
        if($from !='0000-00-00'){
            return $query->where('call_start','>=',$from);
        }
        return $query;
    }

    public function scopeTo($query,$to){
        if($to !='0000-00-00'){
            return $query->where('call_end','<=',$to);
        }
        return $query;
    }

    public function is_new(){
        //IF( id IN (SELECT id FROM calls GROUP BY callerid,gsm_number HAVING MIN(call_start)),'New','') AS new_call
        //return $this
    }
}
