<?php


class Speedometer
{

CONST KM =  1 ;
CONST MILES = 0.6215;

    public static function convertKmToMiles(int $km) : float
    {
         return number_format(($km * self::MILES), 2);
    }

    public static function convertMilestoKm(int $miles) : float
    {
        return number_format(($miles * self::KM), 2);
    }

}