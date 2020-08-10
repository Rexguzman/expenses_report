<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function client()
    {
        return $this->belongsTo(client::class);
    }
}
