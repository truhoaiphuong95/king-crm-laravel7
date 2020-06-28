<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subfield extends Model
{
    public $timestamps = false;

    public function field()
    {
        return $this->belongsTo('App\Models\Subfield');
    }
}
