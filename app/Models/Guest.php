<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'age', 'hability'];

    public function sethabilityAttribute($value)
    {
        $this->attributes['hability'] = json_encode($value);
    }

    public function gethabilityAttribute($value)
    {
        return $this->attributes['hability'] = json_decode($value);
    }
}
