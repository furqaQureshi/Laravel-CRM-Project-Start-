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

    public function organizations()
    {
        return $this->hasMany(Organization::class,'id','organization_id');
    }
}
