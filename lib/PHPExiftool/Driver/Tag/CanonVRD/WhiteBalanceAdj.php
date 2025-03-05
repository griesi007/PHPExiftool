<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceAdj extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'WhiteBalanceAdj';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'White Balance Adj';

    protected $Values = [
        0 => [
            'Id' => '-1',
            'Label' => 'Manual (Click)',
        ],
        1 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        2 => [
            'Id' => 1,
            'Label' => 'Daylight',
        ],
        3 => [
            'Id' => 2,
            'Label' => 'Cloudy',
        ],
        4 => [
            'Id' => 3,
            'Label' => 'Tungsten',
        ],
        5 => [
            'Id' => 4,
            'Label' => 'Fluorescent',
        ],
        6 => [
            'Id' => 5,
            'Label' => 'Flash',
        ],
        7 => [
            'Id' => 8,
            'Label' => 'Shade',
        ],
        8 => [
            'Id' => 9,
            'Label' => 'Kelvin',
        ],
        9 => [
            'Id' => 255,
            'Label' => 'Shot Settings',
        ],
        10 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        11 => [
            'Id' => 1,
            'Label' => 'Daylight',
        ],
        12 => [
            'Id' => 2,
            'Label' => 'Cloudy',
        ],
        13 => [
            'Id' => 3,
            'Label' => 'Tungsten',
        ],
        14 => [
            'Id' => 4,
            'Label' => 'Fluorescent',
        ],
        15 => [
            'Id' => 5,
            'Label' => 'Flash',
        ],
        16 => [
            'Id' => 8,
            'Label' => 'Shade',
        ],
        17 => [
            'Id' => 9,
            'Label' => 'Kelvin',
        ],
        18 => [
            'Id' => 30,
            'Label' => 'Manual (Click)',
        ],
        19 => [
            'Id' => 31,
            'Label' => 'Shot Settings',
        ],
    ];

}
