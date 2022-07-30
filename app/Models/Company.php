<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['name','address','website','email','user_id'];

     use HasFactory;

    public function contacts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
       return $this->hasMany(Contact::class);
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
