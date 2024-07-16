<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    public function colaborador_proyecto()
    {
        return $this->belongsToMany(tipo_pago::class);
    }
    public function pago()
    {
        return $this->hasMany(pago::class);
    }
}
