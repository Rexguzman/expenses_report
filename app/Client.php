<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
    public function users()
    {
        return $this->belongsTo(user::class);
    }
}
