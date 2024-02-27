<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTransferDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'withdraw',
        'deposits',
        'ac_number',
        'current_balance',

    ];
}
