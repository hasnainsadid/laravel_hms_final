<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment';
    protected $fillable = ['p_id', 'date', 'reason', 'doc_id', 'status'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'p_id');
    }

    public function doctor() : BelongsTo {
        return $this->belongsTo(Doctor::class, 'doc_id');
    }
}
