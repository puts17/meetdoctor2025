<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;

    use softdeletes;
    // declare role table
    public $table = 'role';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable 
    protected $fillable = [
        'tittle',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

     // one to many relationship with permission_role
    public function role_user ()
    {
        // 2 parameters (path app, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }

    // one to many relationship with permission_role
    public function permission_role ()
    {
        // 2 parameters (path app, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
}
