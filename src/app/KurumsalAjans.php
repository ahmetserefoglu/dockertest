<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurumsalAjans extends Model
{
    //
    protected $table='kurumsal_ajans';

    protected $fillable=['subject','createdBy','fileName','filePath'];
}
