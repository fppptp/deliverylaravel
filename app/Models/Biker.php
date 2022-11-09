<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biker extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'idcard',
        'gender',
        'birthday',
        'registrationplate',
        'brand',
        'color',
        'image',
    ];
    public function labors()
    {
        return $this->hasmany(Service::class);
    }
}
