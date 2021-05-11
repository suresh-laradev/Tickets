<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cus_name',
        'cus_gstn',
        'cus_phone',
        'cus_email',
        'cus_address',
    ];
}