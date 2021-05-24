<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Project;
use App\User;

class ProjectAssignment extends Model
{
      use SoftDeletes;

      protected $table = 'project_assignment';

       protected $fillable = [

        'project_id', 'user_id','status', 'added_by','remarks','created_at','updated_at','deleted_at',

    ];

    public function author()
    {
        return $this->hasOne('App\User','id','added_by');
    }

    public function project()
    {
        return $this->hasOne('App\Project','id','project_id');
    }


}
