<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $fillable = ['contact_id'];

    public function getUnitStreet()
    {
        return $this->unit . ', ' . $this->street;

    }
    public function getFullAddressAttribute()
    {
        return $this->attributes['unit'] . ', '
        . $this->attributes['street'].' , '
        .$this->attributes['postCode'].' , '
        .$this->attributes['city'].' , '.
        $this->attributes['state'].' , '.
        $this->attributes['country'];

    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function agreement()
    {
        return $this->hasMany('App\Agreement');
    }

}
