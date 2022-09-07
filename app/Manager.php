<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getFullNameAttribute(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}