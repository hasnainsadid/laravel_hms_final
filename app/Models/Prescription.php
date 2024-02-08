<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prescription extends Model
{
    use HasFactory;
    protected $table = 'prescription';
    protected $fillable = ['p_id', 'd_id', 'medicine', 'dose', 'days', 'date'];
    public function doctor() : BelongsTo {
        return $this->belongsTo(Doctor::class, 'd_id');
    }
    public function patient() : BelongsTo {
        return $this->belongsTo(Patient::class, 'p_id');
    }

    public function setPrescriptionAttribute($value)
    {
        $this->attributes['medicine'] = json_encode($value);
        $this->attributes['dose'] = json_encode($value);
        $this->attributes['days'] = json_encode($value);
    }
    public function getPrescriptionAttribute($value)
    {
        return is_array($value) ? $value : json_decode($value, true);
        // return $this->attributes['medicine'] =
    }
}
