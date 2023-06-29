<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'specialist';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

        //one to many 
        public function doctor()
        {
            //2 parameters (path model, field foreign key)
            return $this-> hasMany('App\Models\Operational\Doctor', 'specialist_id');
        }

}
