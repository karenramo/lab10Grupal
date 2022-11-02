<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    public function Comentario()
    {
        return $this->hasMany(Comentario::class);
    }  
    public function pedidos()
    {
        return $this->hasMany(pedidos::class);
    }
    public function envios()
    {
        return $this->hasMany(envios::class);
    }
}
