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
class SensingMethod extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'SensingMethod';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'Sensing Method';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = [
        0 => [
            'Id' => 1,
            'Label' => 'Monochrome area',
        ],
        1 => [
            'Id' => 2,
            'Label' => 'One-chip color area',
        ],
        2 => [
            'Id' => 3,
            'Label' => 'Two-chip color area',
        ],
        3 => [
            'Id' => 4,
            'Label' => 'Three-chip color area',
        ],
        4 => [
            'Id' => 5,
            'Label' => 'Color sequential area',
        ],
        5 => [
            'Id' => 6,
            'Label' => 'Monochrome linear',
        ],
        6 => [
            'Id' => 7,
            'Label' => 'Trilinear',
        ],
        7 => [
            'Id' => 8,
            'Label' => 'Color sequential linear',
        ],
        8 => [
            'Id' => 1,
            'Label' => 'Not defined',
        ],
        9 => [
            'Id' => 2,
            'Label' => 'One-chip color area',
        ],
        10 => [
            'Id' => 3,
            'Label' => 'Two-chip color area',
        ],
        11 => [
            'Id' => 4,
            'Label' => 'Three-chip color area',
        ],
        12 => [
            'Id' => 5,
            'Label' => 'Color sequential area',
        ],
        13 => [
            'Id' => 7,
            'Label' => 'Trilinear',
        ],
        14 => [
            'Id' => 8,
            'Label' => 'Color sequential linear',
        ],
    ];

}
