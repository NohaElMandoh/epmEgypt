<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Project extends Model
{
    use HasFactory;
    protected $appends = ['address','title'];
    public function getAddressAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->address_en;
        } else if (App::isLocale('ar')) {
            return $this->address_ar;
        }
    }
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
    public function images()
    {
        return $this->hasMany('App\Models\ProjectImage');
    }
    public function amenities()
    {
        return $this->belongsToMany('App\Models\Amenity','amenity_project');
    }
    public function plans()
    {
        return $this->hasMany('App\Models\Floorplan');
    }
    public function agent()
    {
        return $this->belongsTo('App\Models\Agent');
    }
}
