<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prequalification extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userresponse()
    {
        return $this->hasMany(UserResponse::class);
    }

    public function beritaAcara()
    {
        return $this->hasOne(PrequalificationMinutes::class);
    }
    public function sertifikat()
    {
        return $this->hasOne(Certificate::class);
    }
}
