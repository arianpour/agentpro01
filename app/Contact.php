<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = ['name', 'email', 'phoneNo',
        'idNumber', 'nationality', 'role', 'user_id'];

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function property()
    {
        return $this->hasMany('App\Property');
    }

    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function bankDetail()
    {
        return $this->hasMany('App\BankDetail');
    }

    public function Agreement()
    {
        return $this->hasMany('App\Agreement');
    }

    public function getFullAddress()
    {
        return $this->unit . ', ' . $this->street.' , '.$this->postCode
        .' , '.$this->city.' , '.$this->state.' , '.$this->country;

    }

}
