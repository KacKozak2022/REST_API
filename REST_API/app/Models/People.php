<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function contacts()
    {
        return $this->hasMany(Contacts::class);
    }
    public function locations()
    {
        return $this->hasMany(Locations::class);
    }
}
