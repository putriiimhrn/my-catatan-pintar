<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;
    protected $fillable = ['account', 'email_encrypted', 'password_encrypted'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
