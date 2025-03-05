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
class MeteringMode extends AbstractTag
{

    protected $Id = 37383;

    protected $Name = 'MeteringMode';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Metering Mode';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Unknown',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Average',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Center-weighted average',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Spot',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Multi-spot',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Multi-segment',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Partial',
        ],
        255 => [
            'Id' => 255,
            'Label' => 'Other',
        ],
    ];

}
