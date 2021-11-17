<?php

namespace App\Util;

use DateInterval;
use DatePeriod;
use DateTime;

class DateTimeUtils
{
    private CONST HOURS_IN_A_DAY = 24;
    private CONST MINUTES_IN_A_HOUR = 60;
    private CONST SECONDS_IN_A_MINUTE = 60;
    private const SECONDS_IN_A_DAY = self::HOURS_IN_A_DAY * self::MINUTES_IN_A_HOUR * self::SECONDS_IN_A_MINUTE;

    public static function getDateDifference(string $rentStartDate,string $rentEndDate) : int
    {
        return round((strtotime($rentStartDate) - strtotime($rentEndDate)) / self::SECONDS_IN_A_DAY);
    }

    //Dummy period creation
    public static function getDummyDatePeriod(): \DatePeriod
    {
        $dashboardStartDate = new DateTime('2021-11-01');
        $dashboardEndDate = new DateTime('2021-11-31');

        $interval = DateInterval::createFromDateString('1 day');

        return new DatePeriod($dashboardStartDate, $interval, $dashboardEndDate);
    }
}
