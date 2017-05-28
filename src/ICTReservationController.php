<?php
/**
 * Created by PhpStorm.
 * User: ICT21
 * Date: 5/24/2017
 * Time: 10:16 AM
 */

namespace ICT\reservation;


use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ICTReservationController extends Controller
{

    public function reserve($timezone = NULL)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo $time->toDateTimeString();
    }

    public function reserveStore($obj = NULL)
    {
            if($obj == null){
                return false ;

            }

        $reservation =  new Reservation();
        $reservation->email = $obj->email;
        $reservation->roomtype_name =$obj->room_name;
        $reservation->name = $obj->name;
        $reservation->last_name =$obj->last_name;
        $reservation->phone = $obj->phone;
        $reservation->check_in =$obj->check_in;
        $reservation->check_out = $obj->check_out;
        $reservation->quota_room = $obj->quota_room;
        $reservation->adult = $obj->adult;
        $reservation->child = $obj->child;
        $reservation->fee =$obj->rate;
        $reservation->nights =$obj->nights ;
        $reservation->payment_status = 'Not paid';

        $reservation->save();
        return true;
    }


}