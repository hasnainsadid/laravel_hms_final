<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Authenticatable
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = ['name', 'address', 'dob', 'gender', 'blood_grp', 'email', 'password', 'phone'];

    public function appointment(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function admission(): HasMany
    {
        return $this->hasMany(Admission::class);
    }
}
