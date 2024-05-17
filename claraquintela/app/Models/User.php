<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = array("name", "email", "password", "country");

    public function privilege()
    {
        return $this->belongsTo(Privilege::class);
    }
}
