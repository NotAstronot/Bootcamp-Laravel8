<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'Role';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many 
    public function role_user()
    {
          //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }

     //one to many 
    public function permission_role()
    {
           //2 parameters (path model, field foreign key field primary key from table hasMany/hasOne)
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
}
