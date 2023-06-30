<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
   //use HasFactory;
    use SoftDeletes;

    public $table = 'PermissionRole';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many 
    public function permission()
    {
         //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }

     //one to many 
    public function role()
    {
          //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
