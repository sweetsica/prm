<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class QR extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function setspecialCodeAttribute($value)
    {
        if($value=='') {
            $randomCode = Str::random(12);
            $this->attributes['specialCode'] = $randomCode;
        }else{
            return $value;
        }
    }


}
