<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
        //use HasFactory;
        use SoftDeletes;

        public $table = 'doctor';
    
        protected $date = [
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    
        protected $fillable = [
            'specialist_id',
            'name',
            'fee',
            'photo',
            'created_at',
            'updated_at',
            'deleted_at',
        ];


        //one to many 
    public function Specialist()
    {
      //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\Specialist','specialist_id');
    }

     //one to many 
    public function Appointment()
    {
         //2 parameters (path model, field foreign key)
        return $this-> hasMany('App\Models\Operational\Appointment', 'doctor_id',);
    }
}
