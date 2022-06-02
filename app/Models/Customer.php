<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Model
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $guarded = [''];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function history()
    {
        return $this->hasMany(History::class);
    }
}
