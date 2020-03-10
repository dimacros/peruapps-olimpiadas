<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplejoDeportivo extends Model
{
    protected $table = 'complejos_deportivos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sede_id', 'name', 'location', 'head_of_organization', 'total_occupied_area',
    ];
}
