<?php

namespace App\Models;

use App\Models\User;
use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable =
    [
    'street',
    'number',
    'district',
    'city',
    'state',
    'country',
    'zip_code',
    'account_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
