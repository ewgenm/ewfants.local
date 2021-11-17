<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{

    protected $table = 'preferences';
    public $timestamps = true;
    protected $fillable = array('name', 'preference_gender');

    public function Users(){
        return  $this->belongsToMany(User::class);
    }
}
