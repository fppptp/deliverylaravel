<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_fullname',
        'customer_phone',
        'parcel_type',
        'parcel_weight',
        'parcel_size',
        'source_name',
        'source_phone',
        'source_address',
        'destination_name',
        'destination_phone',
        'destination_address',
        'date_pickup',
        'date_deliver',
        'amount',
        'pay_type',
        'biker_id',
        'doctype_id',
    ];
    public function supplier()
    {
        return $this->belongsTo(Biker::class);
    }
    public function material()
    {
        return $this->belongsTo(Doctype::class);
    }
}
