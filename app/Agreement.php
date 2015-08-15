<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['client_id', 'owner_id', 'property_id', 'user_id', 'dateOfAgreement', 'commencingDate', 'expireDate'
        , 'rentalAmount', 'rentalDeposit', 'utilitiesDeposit'
        , 'otherDeposit', 'premiseUse'];

    public function setexpireDatecommencingDateAttribute($date)
    {
        $this->attributes['expireDate'] = Carbon::parse($date);
    }

    public function setdateOfAgreementAttribute($date)
    {
        $this->attributes['dateOfAgreement'] = Carbon::parse($date);
    }

    public function setcommencingDateAttribute($date)
    {
        $this->attributes['commencingDate'] = Carbon::parse($date);
    }

    /**
     * Get the user that owns the RentalAgreement.
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function property()
    {
        return $this->belongsTo('App\Property');
    }



}
