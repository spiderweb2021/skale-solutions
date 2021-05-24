<?php

  

namespace App;

  

use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;

  use Illuminate\Database\Eloquent\SoftDeletes;



class User extends Authenticatable

{

    use Notifiable;

    use HasRoles;

  use SoftDeletes;

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'email','email_verified', 'password','uname','gender','status','phone','dob',

    ];

  

    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];

  

    /**

     * The attributes that should be cast to native types.

     *

     * @var array

     */

    protected $casts = [

        'email_verified_at' => 'datetime',

    ];







        public function getDobAttribute() {

        return date('d F, Y', strtotime($this->attributes['dob']));

        }



        public function setDobAttribute($value) {



            $date=date_create($value);

           $this->attributes['dob'] = date_format($date,"Y-m-d");

        }


  public function professionalType()
    {
        return $this->belongsTo(ProfessionalType::class,'expertise')->withTrashed();
    } 

    public function IndustryType()
    {
        return $this->belongsTo(ProfessionalIndustry::class,'professional_industry')->withTrashed();
    }
}