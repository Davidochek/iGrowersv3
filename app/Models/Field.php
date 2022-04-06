<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [ 'farmsize', 'fwithhomestead', 'farmanimals', 'farmblocks', 'farmblocksno', 'farmcertifications', 'farmownership', 'farmtransport', 'fmaincrop', 'fothercrop',
    ];
    public function farmers(){
    	return $this->belongsTo(Farmer::class);
    }

    public function crops(){
    	return $this->hasMany(Crop::class);
    }
}
