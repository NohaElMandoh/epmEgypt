<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Floorplan extends Model
{
    use HasFactory;
    protected $appends = ['title','desc'];
   
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
    public function getDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->desc_en;
        } else if (App::isLocale('ar')) {
            return $this->desc_ar;
        }
    }
}
