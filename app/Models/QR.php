<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class QR extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'q_r_s';

    protected $guarded = [''];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function scopeInactive($query)
    {
        return $query->where('status', 0);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
    public function scopeLimit($query,$limit){
        if($limit == "" || $limit == null){
            return $query->paginate(100);
        }
        return $query->paginate($limit);
    }
    public function scopePromotionByID($query,$promotion_id){
        if($promotion_id == "" || $promotion_id == null){
            return $query;
        }
        return $query->where('promotion_id',$promotion_id);
    }
//    public function setspecialCodeAttribute($value)
//    {
//        if ($value == '') {
//            $randomCode = Str::random(12);
//            return $this->attributes['specialCode'] = $randomCode;
//        } else {
//            return $value;
//        }
//    }


}
