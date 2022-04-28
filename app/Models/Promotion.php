<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function qr()
    {
        return $this->belongsTo(QR::class);
    }
}
