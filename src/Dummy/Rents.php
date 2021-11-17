<?php

use App\Enum\Cities;
use App\Enum\Equipments;

return [
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-01',
            'rentEndDate' => '2021-11-03',
            'endStation' => Cities::MUNICH,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 1,
                Equipments::BED_SHEETS => 1,
                Equipments::SLEEPING_BAGS => 1,
                Equipments::CHAIRS => 1
            ]
        ]
    ],
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-02',
            'rentEndDate' => '2021-11-05',
            'endStation' => Cities::MUNICH,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 2,
                Equipments::BED_SHEETS => 2,
                Equipments::SLEEPING_BAGS => 2,
                Equipments::CAMPING_TABLES => 4
            ]
        ]
    ],
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-01',
            'rentEndDate' => '2021-11-08',
            'endStation' => Cities::MADRID,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 12,
                Equipments::BED_SHEETS => 22,
                Equipments::SLEEPING_BAGS => 7,
                Equipments::CAMPING_TABLES => 9
            ]
        ]
    ],
    [
        Cities::PARIS => [
            'rentStartDate' => '2021-11-03',
            'rentEndDate' => '2021-11-06',
            'endStation' => Cities::MADRID,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 3,
                Equipments::SLEEPING_BAGS => 3
            ]
        ]
    ],
    [
        Cities::MADRID => [
            'rentStartDate' => '2021-11-03',
            'rentEndDate' => '2021-11-06',
            'endStation' => Cities::MUNICH,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 20,
                Equipments::BED_SHEETS => 20,
                Equipments::SLEEPING_BAGS => 20
            ]
        ]
    ],
    [
        Cities::PORTO => [
            'rentStartDate' => '2021-11-10',
            'rentEndDate' => '2021-11-20',
            'endStation' => Cities::PORTO,
            'requestedEquipments' => [
                Equipments::BED_SHEETS => 20,
                Equipments::SLEEPING_BAGS => 20,
                Equipments::CAMPING_TABLES => 20
            ]
        ]
    ],
    [
        Cities::PARIS => [
            'rentStartDate' => '2021-11-05',
            'rentEndDate' => '2021-11-12',
            'endStation' => Cities::PARIS,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 10,
                Equipments::SLEEPING_BAGS => 13,
                Equipments::CAMPING_TABLES => 17
            ]
        ]
    ],
    [
        Cities::PORTO => [
            'rentStartDate' => '2021-11-09',
            'rentEndDate' => '2021-11-16',
            'endStation' => Cities::MUNICH,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 5,
                Equipments::SLEEPING_BAGS => 8,
                Equipments::CAMPING_TABLES => 9
            ]
        ]
    ],
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-20',
            'rentEndDate' => '2021-11-24',
            'endStation' => Cities::MUNICH,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 6,
                Equipments::SLEEPING_BAGS => 9,
                Equipments::CAMPING_TABLES => 9
            ]
        ]
    ],
    [
        Cities::MADRID => [
            'rentStartDate' => '2021-11-23',
            'rentEndDate' => '2021-11-29',
            'endStation' => Cities::PORTO,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 3,
                Equipments::SLEEPING_BAGS => 9,
                Equipments::CAMPING_TABLES => 2
            ]
        ]
    ],
    [
        Cities::PORTO => [
            'rentStartDate' => '2021-11-24',
            'rentEndDate' => '2021-11-27',
            'endStation' => Cities::PORTO,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 12,
                Equipments::SLEEPING_BAGS => 15,
                Equipments::CAMPING_TABLES => 18,
                Equipments::CHAIRS => 18
            ]
        ]
    ],
    [
        Cities::MADRID => [
            'rentStartDate' => '2021-11-21',
            'rentEndDate' => '2021-11-28',
            'endStation' => Cities::MADRID,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 7,
                Equipments::SLEEPING_BAGS => 9,
                Equipments::CAMPING_TABLES => 11,
                Equipments::CHAIRS => 12
            ]
        ]
    ],
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-15',
            'rentEndDate' => '2021-11-22',
            'endStation' => Cities::MUNICH,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 3,
                Equipments::SLEEPING_BAGS => 3,
                Equipments::CAMPING_TABLES => 4,
                Equipments::CHAIRS => 5
            ]
        ]
    ],
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-11',
            'rentEndDate' => '2021-11-18',
            'endStation' => Cities::MADRID,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 10,
                Equipments::CHAIRS => 5
            ]
        ]
    ],
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-09',
            'rentEndDate' => '2021-11-15',
            'endStation' => Cities::PORTO,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 10,
                Equipments::CHAIRS => 5
            ]
        ]
    ],
    [
        Cities::PORTO => [
            'rentStartDate' => '2021-11-09',
            'rentEndDate' => '2021-11-29',
            'endStation' => Cities::PORTO,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 20,
                Equipments::CHAIRS => 20,
                Equipments::BED_SHEETS => 20
            ]
        ]
    ],
    [
        Cities::MUNICH => [
            'rentStartDate' => '2021-11-16',
            'rentEndDate' => '2021-11-22',
            'endStation' => Cities::PARIS,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 12,
                Equipments::CHAIRS => 14,
                Equipments::CAMPING_TABLES => 20
            ]
        ]
    ],
    [
        Cities::MADRID => [
            'rentStartDate' => '2021-11-01',
            'rentEndDate' => '2021-11-30',
            'endStation' => Cities::MADRID,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 10,
                Equipments::CHAIRS => 9,
                Equipments::CAMPING_TABLES => 8,
                Equipments::BED_SHEETS => 8
            ]
        ]
    ],
    [
        Cities::MADRID => [
            'rentStartDate' => '2021-11-03',
            'rentEndDate' => '2021-11-10',
            'endStation' => Cities::MUNICH,
            'requestedEquipments' => [
                Equipments::PORTABLE_TOILETS => 7,
                Equipments::CHAIRS => 12,
                Equipments::CAMPING_TABLES => 9,
                Equipments::BED_SHEETS => 3
            ]
        ]
    ],
    [
        Cities::MADRID => [
            'rentStartDate' => '2021-11-14',
            'rentEndDate' => '2021-11-20',
            'endStation' => Cities::PORTO,
            'requestedEquipments' => [
                Equipments::CHAIRS => 13,
                Equipments::CAMPING_TABLES => 5,
                Equipments::BED_SHEETS => 4
            ]
        ]
    ],
    [
        Cities::MADRID => [
            'rentStartDate' => '2021-11-14',
            'rentEndDate' => '2021-11-20',
            'endStation' => Cities::MADRID,
            'requestedEquipments' => [
                Equipments::CHAIRS => 12,
            ]
        ]
    ],
    [
        Cities::PORTO => [
            'rentStartDate' => '2021-11-01',
            'rentEndDate' => '2021-11-13',
            'endStation' => Cities::PORTO,
            'requestedEquipments' => [
                Equipments::CHAIRS => 12,
                Equipments::PORTABLE_TOILETS => 12,
                Equipments::BED_SHEETS => 16
            ]
        ]
    ]
];
