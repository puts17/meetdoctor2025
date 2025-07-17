<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use HasFactory;

    use softdeletes;
    // declare role table
    public $table = 'role_user';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable 
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

     // one to many relationship with user
    public function role ()
    {
        // 3 parameters (path app, field foreign key & field primary key)
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
