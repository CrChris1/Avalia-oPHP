<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['name', 'jogador_id'];

    public function jogador() {
        return $this->belongsTo(jogador::class);
    }
}
