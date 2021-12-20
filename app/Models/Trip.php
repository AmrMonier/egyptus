<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['available_seats'];
    protected $cast = [
        'start_date',
        'end_date'
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id', 'id');
    }
}
