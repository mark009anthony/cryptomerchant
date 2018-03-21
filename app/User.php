<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'email', 'password','firstname',   
'business_name',
'business_number',
'business_address1',
'business_address2',
'business_city',
'business_region',
'business_zipcode',
'business_type',
'business_category',
'business_subcategory',
'business_url',
'business_registration',
'date_registered',
'country',
'nationality', 
'id_name',      
'id_no',
'birthdate',   
'home_address1',
'home_address2',
'home_city',  
'home_region',
'home_zipcode', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
}
