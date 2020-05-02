<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    public $timestamps = false;
    
    protected $table = 'leads';
    protected $primaryKey = 'id';



    public $fillable = ['id','name','email','mobile','address','room_type_id','property_id','budget','enquiry_date','followup_date','followup_remark','active'];


}
