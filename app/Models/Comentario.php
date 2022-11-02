<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public function Usuarios()
    {
        return $this->belongsTo(Usuarios::class);
    }
    public function productos()
    {
        return $this->belongsTo(productos::class);
    }
}
