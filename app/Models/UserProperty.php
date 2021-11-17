<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProperty extends Model
{

    protected $table = 'user_propertys';
    public $timestamps = true;
    protected $fillable = array('gender_id', 'age', 'weight', 'height');

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function gender(){
        return $this->hasOne('App\Gender','id', 'gender_id');
    }

}
