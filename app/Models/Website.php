<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Website extends Model
{
    use HasFactory;
    protected $appends = ['address'];
    
    public function getAddressAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->address_en;
        } else if (App::isLocale('ar')) {
            return $this->address_ar;
        }
    }
}
