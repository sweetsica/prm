<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory,Notifiable;

    protected $guarded = [''];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function qrs()
    {
        return $this->hasMany(QR::class);
    }
}
