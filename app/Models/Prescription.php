<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prescription extends Model
{
    use HasFactory;
    protected $table = 'prescription';

    protected $fillable = ['p_id', 'd_id', 'm_id', 'dose', 'days', 'date'];

    public function doctor() : BelongsTo {
        return $this->belongsTo(Doctor::class, 'd_id');
    }
    public function patient() : BelongsTo {
        return $this->belongsTo(Patient::class, 'p_id');
    }
    public function medicine() : BelongsTo {
        return $this->belongsTo(Medicine::class, 'm_id');
    }


    protected $casts = [
        'm_id' => 'json',
        'dose' => 'json',
        'days' => 'json',
    ];

    protected function data(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => json_encode($value),
            get: fn ($value) => json_decode($value, true),
        );
    } 
}
