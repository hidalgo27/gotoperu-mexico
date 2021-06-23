<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TSeoImagen extends Model
{
    protected $table = "tseoimagen";

    public function seo()
    {
        return $this->belongsTo(TSeo::class, 'idseo');
    }
}
