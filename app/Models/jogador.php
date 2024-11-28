<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable = ['name', 'idade', 'time'];

    protected $table = "jogadores";

    public function times() {
        return $this->hasMany(Time::class);
    }
}
