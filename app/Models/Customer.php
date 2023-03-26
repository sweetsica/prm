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
        return $this->hasMany(Order::class,'customer_id');
    }

    public function histories()
    {
        return $this->hasMany(History::class, 'customer_id')->latest();
    }
}
