<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "client";

    protected $fillable = [
        'organization_id', 'name', 'email', 'phone'
    ];

    public function organization_get()
    {
        return $this->hasOne(Organization::class, 'organization_id');
    }
}
