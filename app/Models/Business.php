<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public $timestamps = false;
    
    protected $table = 'business';
    protected $primaryKey = 'business_id';

    protected $fillable = ['business_id','business_name','user_id','state_id','city','business_pincode','business_url','business_type_id','business_employee_count','business_est_year','business_gst','business_pan','business_fssai','business_logo','business_status'];
}
