<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    protected $fillable = [
        'name',
        'zipcode',
        'street',
        'neighborhood',
        'city',
        'uf',
        'number',
        'galc',
        'port',
        'address',
        'velocity',
        'status',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
