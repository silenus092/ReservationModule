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
}