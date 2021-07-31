<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Testimonial extends Model
{
    use HasFactory;
    protected $appends = ['comment','address'];
    public function getCommentAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->comment_en;
        } else if (App::isLocale('ar')) {
            return $this->comment_ar;
        }
    }
    public function getAddressAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->address_en;
        } else if (App::isLocale('ar')) {
            return $this->address_ar;
        }
    }
}
