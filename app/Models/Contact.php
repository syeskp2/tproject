<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'phone_no', 'address'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function contactinformation(){
        return $this->HasOne(Contactinformation::class);
    }
}
