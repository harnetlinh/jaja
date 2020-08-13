<?php

namespace App\Laravue\Models;

use Illuminate\Database\Eloquent\Model;

class DetailAnsweredSurvey extends Model
{
    //
    public function answeredsurvey()
    {
        return $this->belongsTo('App\Laravue\Models\AnsweredSurvey','answered_survey_id','id');
    }
    public function option()
    {
        return $this->belongsTo('App\Laravue\Models\Option');
    }
}
