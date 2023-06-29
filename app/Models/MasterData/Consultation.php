<?php

namespace App\Models\Masterdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'consultation';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


     //one to many 
    public function appointment()
    {
       //2 parameters (path model, field foreign key field primary key )
        return $this->hasMany('App\Models\Operational\Appointment','consultation_id');
    }
}
