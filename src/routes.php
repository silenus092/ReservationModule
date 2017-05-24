<?php
/**
 * Created by PhpStorm.
 * User: ICT21
 * Date: 5/24/2017
 * Time: 10:31 AM
 */


Route::get('reservation/{timezone}', 'ICT\reservation\ICTReservationController@reserve');

