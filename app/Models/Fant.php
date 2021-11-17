<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fant extends Model
{

    protected $table = 'fants';
    public $timestamps = true;
    protected $fillable = array('title', 'article', 'level', 'gender', 'age_min', 'age_max', 'weight_min', 'weight_max');

}
