<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $table = 'proposals';

    public function supa(){
        return $this->belongsTo('App\User','supervisor');
    }
    
}

