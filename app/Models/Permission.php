<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $primaryKey = 'permission_id';
    public $timestamps = false;
    
    public function users()
    {
        return $this->hasMany(User::class, 'permission_id');
    }
}
