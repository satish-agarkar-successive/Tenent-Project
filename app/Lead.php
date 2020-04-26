<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';

    public $fillable = ['id','name','email','mobile','address','type_of_room_id','type_of_room','property_name_id','property_name','budget','date_of_enquiry','followup_date','followup_remark','active'];
}
