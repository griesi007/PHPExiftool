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
class CustomRendered extends AbstractTag
{

    protected $Id = 41985;

    protected $Name = 'CustomRendered';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Custom Rendered';

    protected $local_g1 = 'ExifIFD';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Normal',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Custom',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'HDR (no original saved)',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'HDR (original saved)',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Original (for HDR)',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Panorama',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Portrait HDR',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Portrait',
        ],
    ];

}
