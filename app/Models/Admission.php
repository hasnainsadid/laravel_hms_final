<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admission extends Model
{
    use HasFactory;
    protected $table = 'admission';
    protected $fillable = ['p_id', 'seat_id', 'admission_date', 'release_date'];

    public function seat(): BelongsTo {
        return $this->belongsTo(Seat::class, 'seat_id');
    }

    public function patient() : BelongsTo{
        return $this->belongsTo(Patient::class, 'p_id');
    }
}
