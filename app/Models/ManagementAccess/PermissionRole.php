<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\ELoquent\SoftDeletes;

class PermissionRole extends Model
{
    use HasFactory;

    use SoftDeletes;
    // declare table permission_role
    public $table = 'permission_role';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare 
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

     // one to many relationship with Permission
    public function Permission ()
    {
        // 3 parameters (path app, field foreign key & field primary key)
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    } 

    // one to many relationship with Role
    public function role ()
    {
        // 2 parameters (path app, field foreign key)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }

}
