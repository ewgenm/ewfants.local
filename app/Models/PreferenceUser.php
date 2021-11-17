<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreferenceUser extends Model
{

    protected $table = 'preference_user';
    public $timestamps = false;
    protected $fillable = array('preference_id', 'user_id', 'level');

    public function levelName(){
        return $this->hasOne('App\Level','id', 'level');
    }

}
