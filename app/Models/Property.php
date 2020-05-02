<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public $timestamps = false;
    
    protected $table = 'property';
    protected $primaryKey = 'id';

    protected $fillable = [ 'id','property_name','building_name','user_id','property_address_1','property_address_2','state_id','city','property_pincode','property_landmark','property_type_id','property_gender_id','property_amenities','property_photo_gallery','property_about','property_tc','property_status'];
}
