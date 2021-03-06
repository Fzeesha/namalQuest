<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'applicant_program_details';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
