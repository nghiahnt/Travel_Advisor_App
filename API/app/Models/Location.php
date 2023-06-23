<?php

namespace App\Models;
use App\Models\Property;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'image', 'shortDescription',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}