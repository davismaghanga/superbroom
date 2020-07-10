<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public function advertisement()
    {
        return $this->hasOne(Advertisement::class);
    }
}
