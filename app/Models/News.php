<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class News extends Model
{
    use HasFactory;
    protected $appends = ['title','desc','ftext','stext'];
   
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
    public function getFtextAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->text1_en;
        } else if (App::isLocale('ar')) {
            return $this->text1_ar;
        }
    }
    public function getStextAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->text2_en;
        } else if (App::isLocale('ar')) {
            return $this->text2_ar;
        }
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
