<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CameraIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceSet extends AbstractTag
{

    protected $Id = 13056;

    protected $Name = 'WhiteBalanceSet';

    protected $FullName = 'PanasonicRaw::CameraIFD';

    protected $GroupName = 'CameraIFD';

    protected $g0 = 'PanasonicRaw';

    protected $g1 = 'CameraIFD';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'White Balance Set';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Daylight',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Cloudy',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Tungsten',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'n/a',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Flash',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'n/a',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'n/a',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Custom#1',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Custom#2',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Custom#3',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Custom#4',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'Shade',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Kelvin',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'AWBc',
        ],
    ];

}
