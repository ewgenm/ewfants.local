<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToyUser extends Model
{

    protected $table = 'toy_user';
    public $timestamps = false;
    protected $fillable = array('toy_id');

}
