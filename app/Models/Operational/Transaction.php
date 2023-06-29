<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'transaction';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub-total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


     //one to many 
    public function appointment()
    {
          //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\Operational\Appointment','appointment_id', 'id');
    }
}
