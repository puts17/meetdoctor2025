<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use HasFactory;

    use softdeletes;
    // declare role table
    public $table = 'consultation';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at', 
        'deleted_at',
    ];

    // declare fillable 
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ]; 

    // declare relationship with appointment
    public function appointment () 
    {
        //  3 path (path app, field foreign key)
        return $this -> hasMany('App\Models\MasterData\Appointment', 'consultation_id');
}
}

