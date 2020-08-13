<?php

namespace App\Laravue\Models;

use Illuminate\Database\Eloquent\Model;

class AnsweredSurvey extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\Laravue\Models\User','respondent_id','id');
    }
    public function detailansweredsurveys()
    {
        return $this->hasMany('App\Laravue\Models\DetailAnsweredSurvey');
    }
}
