<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'Role_user';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many 
    public function user()
    {
         //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

     //one to many 
    public function role()
    {
          //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
