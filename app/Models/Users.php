<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;
    
    protected $table = 'users';
    protected $primaryKey = 'user_id';


    protected $fillable = ['user_id','user_name','user_mobile','user_address','user_email','user_gender','user_state','user_city','zip','user_activation_date','user_renewal_date','user_deal_value','user_status'];

}
