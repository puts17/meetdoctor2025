<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigPayment extends Model
{
    use HasFactory;
    
    use softdeletes;
    // declare role table
    public $table = 'config_payment';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at', 
        'deleted_at',
    ];

    // declare fillable 
    protected $fillable = [
        'fee',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
