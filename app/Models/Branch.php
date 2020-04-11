<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = ['id', 'name'];
    
    public function reciepts()
    {
        return $this->hasMany('App\Model\Receipt');
    }

    public function payments()
    {
        return $this->hasMany('App\Model\Payment');
    }
}
