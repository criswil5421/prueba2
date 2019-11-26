<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'persona_id';
    protected $table ='persona';
    protected $guarded = ["id"];
}
