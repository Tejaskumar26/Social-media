<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use tidyNode;

class friendslists extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function user(){
        return $this->hasMany(User::class);
    }
}
