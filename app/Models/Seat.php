<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seat extends Model
{
    use HasFactory;
    protected $table = 'seats';
    protected $fillable = ['name', 'cost'];
    public function admission(): HasMany{
        return $this->hasMany(Admission::class);
    }
}
