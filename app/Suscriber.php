<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Suscriber extends Model
{
    protected $fillable = [
        'first_name', 'last_name',
        'identity_card', 'birth_date',
        'email',
        'cellphone', 'phone',
        'gender', 'city',
        'address',
        'occupation', 'workplace',
        // 'validation_document',
        'operation_number', 'payment_date'
        // 'validation_voucher'
    ];

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::createFromFormat('d/m/Y', $value);
    }

    public function setPaymentDateAttribute($value)
    {
        $this->attributes['payment_date'] = Carbon::createFromFormat('d/m/Y', $value);
    }
}
