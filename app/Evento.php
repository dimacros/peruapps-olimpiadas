<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'complejo_deportivo_id', 'start_date', 'duration_in_hours'
    ];
}
