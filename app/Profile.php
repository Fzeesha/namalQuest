<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'applicant_profile';

    protected $fillable = ['user_id', 'father_name', 'date_of_birth'];

  

}
