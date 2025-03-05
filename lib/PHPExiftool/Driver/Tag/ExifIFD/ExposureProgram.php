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
class ExposureProgram extends AbstractTag
{

    protected $Id = 34850;

    protected $Name = 'ExposureProgram';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Exposure Program';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Not Defined',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Manual',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Program AE',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Aperture-priority AE',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Shutter speed priority AE',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Creative (Slow speed)',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Action (High speed)',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Portrait',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Landscape',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Bulb',
        ],
    ];

}
