<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TSeo extends Model
{
    //
    protected $table = "tseo";

    public function locale_seo()
    {
        return $this->hasMany(TLocale::class, 'idseo');
    }

    public function imagen_seo()
    {
        return $this->hasMany(TSeoImagen::class, 'idseo');
    }
}
