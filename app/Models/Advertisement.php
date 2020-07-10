<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Advertisement extends Model
{
    use softDeletes;

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }

}
