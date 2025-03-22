<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'departement_name',
        'head_of_departement',
        'email'
    ];
}
