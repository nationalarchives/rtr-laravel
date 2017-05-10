<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

}
