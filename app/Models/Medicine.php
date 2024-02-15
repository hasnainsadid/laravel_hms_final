<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medicine extends Model
{
    use HasFactory;
    protected $table = 'medicine';
    protected $fillable = ['name', 'status'];

    public function prescription(): HasMany{
        return $this->hasMany(Prescription::class);
    }
}
