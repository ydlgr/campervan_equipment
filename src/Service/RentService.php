<?php

namespace App\Service;

use App\Util\DateTimeUtils;

class RentService
{
    private array $stocks;
    private array $rentRequests;

    public function __construct()
    {
        $this->stocks = require __DIR__ . '/../Dummy/Stocks.php';
        $this->rentRequests = require __DIR__ . "/../Dummy/Rents.php";
    }

    public function calculate() :array
    {
        foreach ($this->rentRequests as $city) {
            foreach ($city as $cityName => $orders) {

                $dayDifferenceBetweenEndAndStartDate = DateTimeUtils::getDateDifference(
                    $orders['rentEndDate'],
                    $orders['rentStartDate']
                );

                for ($i = 0; $i <= $dayDifferenceBetweenEndAndStartDate; $i++) {

                    foreach ($orders['requestedEquipments'] as $requestedEquipmentName => $requestedAmount) {

                        $rentDatePeriod = date('Y-m-d', strtotime($orders['rentStartDate'] . "$i day"));

                        $this->stocks[$rentDatePeriod][$cityName][$requestedEquipmentName]['stock'] -= $requestedAmount;
                        $this->stocks[$rentDatePeriod][$cityName][$requestedEquipmentName]['demand'] += $requestedAmount;

                        if ($i == $dayDifferenceBetweenEndAndStartDate) {
                            $this->stocks[$rentDatePeriod][$orders['endStation']][$requestedEquipmentName]['stock'] += $requestedAmount;
                            $this->stocks[$rentDatePeriod][$orders['endStation']][$requestedEquipmentName]['demand'] -= $requestedAmount;
                        }
                    }
                }
            }
        }
        return $this->stocks;
    }
}
