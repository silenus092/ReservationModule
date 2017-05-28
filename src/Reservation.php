<?php
/**
 * Created by PhpStorm.
 * User: ICT21
 * Date: 5/28/2017
 * Time: 10:07 PM
 */

namespace packages\ICT\reservation\src;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{


    protected $fillable = [
        'id', 'email', 'roomtype_name',  'name', 'last_name', 'phone',  'check_in', 'check_out', 'quota_room',
        'adult', 'child', 'fee',  'nights', 'payment_status'
    ];
}