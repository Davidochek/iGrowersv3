<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;

     protected $fillable = [ 'name', 'gender', 'age', 'education', 'phone', 'location', 'fperiod',
    ];

    public function fields(){
    	return $this->hasMany(Field::class);
    }
}
