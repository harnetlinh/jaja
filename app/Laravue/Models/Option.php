<?php

namespace App\Laravue\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $fillable = [
        'quiz_id', 'option_ja','option_en','correct','position'
    ];
    public function quizz()
    {
        return $this->belongsTo('App\Laravue\Models\Quiz','quiz_id','id');
    }
    public $timestamps = false;
    // public function options()
    // {
    //     return $this->hasMany('App\Laravue\Models\Option');
    // }
}
