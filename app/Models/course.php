<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function trainees() {
        return $this->belongsTo('App\trainee');
    }
}
