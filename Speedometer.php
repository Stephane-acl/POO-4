<?php


class Speedometer
{


CONST LENGTHOFKM     = 0.6215;

    public static function convertKmToMiles(int $km) : float
    {
         return number_format(($km * self::LENGTHOFKM ), 2);
    }

    public static function convertMilestoKm(int $miles) : float
    {
        return number_format(($miles / self::LENGTHOFKM ), 2);
    }

}