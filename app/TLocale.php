<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TLocale extends Model
{
    protected $table = "locale";

    public function seo()
    {
        return $this->belongsTo(TLocale::class, 'idseo');
    }
}
