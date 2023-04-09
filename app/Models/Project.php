<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $table = "projects";

    protected $fillable = [
        'client_id', 'manager_id', 'status_id', 'title', 'deadline', 'description'
    ];

    public function client_data(){
        return $this->hasMany(Client::class,'client_id');
    }
}
