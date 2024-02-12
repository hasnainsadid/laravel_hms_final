<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Billing extends Model
{
    use HasFactory;
    protected $table = 'billing';
    protected $fillable = ['p_id', 'date', 'grand_total'];
    
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'p_id');
    }
}
