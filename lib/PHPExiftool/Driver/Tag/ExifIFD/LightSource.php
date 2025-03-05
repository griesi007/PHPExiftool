<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LightSource extends AbstractTag
{

    protected $Id = 37384;

    protected $Name = 'LightSource';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Light Source';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Unknown',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Daylight',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Fluorescent',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Tungsten (Incandescent)',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Flash',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Fine Weather',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Cloudy',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Shade',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'Daylight Fluorescent',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Day White Fluorescent',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Cool White Fluorescent',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'White Fluorescent',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Warm White Fluorescent',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'Standard Light A',
        ],
        18 => [
            'Id' => 18,
            'Label' => 'Standard Light B',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'Standard Light C',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'D55',
        ],
        21 => [
            'Id' => 21,
            'Label' => 'D65',
        ],
        22 => [
            'Id' => 22,
            'Label' => 'D75',
        ],
        23 => [
            'Id' => 23,
            'Label' => 'D50',
        ],
        24 => [
            'Id' => 24,
            'Label' => 'ISO Studio Tungsten',
        ],
        255 => [
            'Id' => 255,
            'Label' => 'Other',
        ],
    ];

}
