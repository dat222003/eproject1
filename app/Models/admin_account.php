<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_account extends Model
{
    use HasFactory;

    protected $table = 'admin_accounts';

    protected $fillable = [
        'name',
        'full_name',
        'hash_password',
        'username',
        'email',
        'phone'
    ];
}
