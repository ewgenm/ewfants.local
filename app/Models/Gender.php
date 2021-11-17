<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    //
    protected $fillable = ['id', 'name'];

    public function UserProperty(){
        $this->belongsTo('App\UserProperty','id', 'gender', 'name');
    }
}
