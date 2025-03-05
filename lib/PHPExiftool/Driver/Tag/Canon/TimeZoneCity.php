<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class TimeZoneCity extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'TimeZoneCity';

    protected $FullName = 'Canon::TimeInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Time';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Time Zone City';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'n/a',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Chatham Islands',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Wellington',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Solomon Islands',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Sydney',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Adelaide',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Tokyo',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Hong Kong',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Bangkok',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Yangon',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Dhaka',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Kathmandu',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'Delhi',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Karachi',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Kabul',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'Dubai',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Tehran',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'Moscow',
        ],
        18 => [
            'Id' => 18,
            'Label' => 'Cairo',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'Paris',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'London',
        ],
        21 => [
            'Id' => 21,
            'Label' => 'Azores',
        ],
        22 => [
            'Id' => 22,
            'Label' => 'Fernando de Noronha',
        ],
        23 => [
            'Id' => 23,
            'Label' => 'Sao Paulo',
        ],
        24 => [
            'Id' => 24,
            'Label' => 'Newfoundland',
        ],
        25 => [
            'Id' => 25,
            'Label' => 'Santiago',
        ],
        26 => [
            'Id' => 26,
            'Label' => 'Caracas',
        ],
        27 => [
            'Id' => 27,
            'Label' => 'New York',
        ],
        28 => [
            'Id' => 28,
            'Label' => 'Chicago',
        ],
        29 => [
            'Id' => 29,
            'Label' => 'Denver',
        ],
        30 => [
            'Id' => 30,
            'Label' => 'Los Angeles',
        ],
        31 => [
            'Id' => 31,
            'Label' => 'Anchorage',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'Honolulu',
        ],
        33 => [
            'Id' => 33,
            'Label' => 'Samoa',
        ],
        32766 => [
            'Id' => 32766,
            'Label' => '(not set)',
        ],
    ];

}
