<?php

namespace App\Models\ManagementOperasional;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Transaction extends Model
{
    use HasFactory;

    use softdeletes;
    // declare role table
    public $table = 'transaction';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at', 
        'deleted_at',
    ];

    // declare fillable 
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

     // one to many relationship with appointment
    public function appointment()
    {
        // 3 parameters (path app & field foreign key & field primary key)
        return $this->belongsTo('App\Models\ManagementOperasional\Appointment', 'appointment_id', 'id');
    } 
}
