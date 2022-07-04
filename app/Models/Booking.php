<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

     protected $fillable = [
        'users_id', 'beds_id'
    ]; 

    public function product()
    {
        return $this->hasOne(Bed::class, 'id', 'beds_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
