<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'title',
        'email',
        'firstname',
        'lastname',
        'address',
        'postal_code',
        'city',
        'provincie',
    ];
    //

    public function reservations() {
        return $this->hasMany('App\Reservation');
    }

    public function delete() {
        $this->reservations()->delete();

        return parent::delete();
    }
}
