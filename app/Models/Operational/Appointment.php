<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'appointment';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

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

       //one to many 
    public function doctor()
    {
         //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\Operational\Doctor','doctor_id', 'id');
    }

      //one to many 
    public function consultation()
    {
         //2 parameters (path model, field foreign key field primary key )
        return $this->belongsTo('App\Models\MasterData\Consultation','consultation_id');
    }

    //one to many 
    public function transaction()
    {
         //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
    }
}
