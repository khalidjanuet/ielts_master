<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListeningEvaluation extends Model
{
     public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
