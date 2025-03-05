<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'WhiteBalance';

    protected $FullName = 'mixed';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'White Balance';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        1 => [
            'Id' => 2,
            'Label' => 'Tungsten',
        ],
        2 => [
            'Id' => 3,
            'Label' => 'Daylight',
        ],
        3 => [
            'Id' => 4,
            'Label' => 'Fluorescent',
        ],
        4 => [
            'Id' => 5,
            'Label' => 'Shade',
        ],
        5 => [
            'Id' => 129,
            'Label' => 'Manual',
        ],
        6 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        7 => [
            'Id' => 1,
            'Label' => 'Daylight',
        ],
        8 => [
            'Id' => 2,
            'Label' => 'Shade',
        ],
        9 => [
            'Id' => 3,
            'Label' => 'Tungsten',
        ],
        10 => [
            'Id' => 4,
            'Label' => 'Fluorescent',
        ],
        11 => [
            'Id' => 5,
            'Label' => 'Manual',
        ],
        12 => [
            'Id' => 0,
            'Label' => 'Manual',
        ],
        13 => [
            'Id' => 1,
            'Label' => 'Daylight',
        ],
        14 => [
            'Id' => 2,
            'Label' => 'Cloudy',
        ],
        15 => [
            'Id' => 3,
            'Label' => 'Shade',
        ],
        16 => [
            'Id' => 4,
            'Label' => 'Flash?',
        ],
        17 => [
            'Id' => 6,
            'Label' => 'Fluorescent',
        ],
        18 => [
            'Id' => 9,
            'Label' => 'Tungsten?',
        ],
        19 => [
            'Id' => 10,
            'Label' => 'Tungsten',
        ],
        20 => [
            'Id' => 12,
            'Label' => 'Flash',
        ],
    ];

}
