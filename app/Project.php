<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ProfessionalType;
use App\ProfessionalIndustry;
use App\ProjectAssignment;
class Project extends Model
{
      use SoftDeletes;


      public function professionalType()
    {
        return $this->belongsTo(ProfessionalType::class,'professional_type')->withTrashed();
    } 

    public function IndustryType()
    {
        return $this->belongsTo(ProfessionalIndustry::class,'professional_industry')->withTrashed();
    }

    public function assignedUser()
    {
        return $this->hasMany('App\ProjectAssignment','project_id'); 
    }
}
