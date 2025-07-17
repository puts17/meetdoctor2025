<?php

namespace App\Models\ManagementOperasional;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory;

    use softdeletes;
    // declare role table
    public $table = 'appointment';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at', 
        'deleted_at',
    ];

    // declare fillable 
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


     // one to many relationship with doctor
    public function doctor()
    {
        // 2 parameters (path app & field foreign key)
        return $this->belongsTo('App\Models\ManagementOperasional\Doctor', 'doctor_id', 'id');
    } 

        // declare relationship with consultation
    public function consultation () 
    {
        //  3 path (path app, field foreign key and field primary key)
        return $this -> belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
    }

     // one to many relationship with users
    public function user()
    {
        // 3 parameters (path app & field foreign key & field primary key)
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    } 

     // one to many relationship with transaction
    public function transaction()
    {
        // 2 parameters (path app & field foreign key)
        return $this->hasOne('App\Models\ManagementOperasional\Transaction', 'appointment_id');
    } 


    
}
