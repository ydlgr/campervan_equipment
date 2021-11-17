<?php

use App\Util\DateTimeUtils;
use App\Enum\Cities;
use App\Enum\Equipments;

$periods = DateTimeUtils::getDummyDatePeriod();

$stocks = [];
foreach ($periods as $value) {
    $stocks[$value->format('Y-m-d')] =
        [
            Cities::MUNICH => [
                Equipments::PORTABLE_TOILETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::BED_SHEETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::SLEEPING_BAGS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CAMPING_TABLES => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CHAIRS => [
                    'stock' => 100,
                    'demand' => 0
                ]
            ],
            Cities::PARIS => [
                Equipments::PORTABLE_TOILETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::BED_SHEETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::SLEEPING_BAGS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CAMPING_TABLES => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CHAIRS => [
                    'stock' => 100,
                    'demand' => 0
                ]
            ],
            Cities::PORTO => [
                Equipments::PORTABLE_TOILETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::BED_SHEETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::SLEEPING_BAGS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CAMPING_TABLES => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CHAIRS => [
                    'stock' => 100,
                    'demand' => 0
                ]
            ],
            Cities::MADRID => [
                Equipments::PORTABLE_TOILETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::BED_SHEETS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::SLEEPING_BAGS => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CAMPING_TABLES => [
                    'stock' => 100,
                    'demand' => 0
                ],
                Equipments::CHAIRS => [
                    'stock' => 100,
                    'demand' => 0
                ]
            ]
        ];
}

return $stocks;
