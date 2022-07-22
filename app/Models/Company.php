<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['name','address','website','email'];

     use HasFactory;

    public function contacts()
    {
       return $this->hasMany(Contact::class);
    }
}
