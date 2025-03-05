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
class Transformation extends AbstractTag
{

    protected $Id = 48130;

    protected $Name = 'Transformation';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Transformation';

    protected $local_g1 = 'ExifIFD';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Horizontal (normal)',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Mirror vertical',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Mirror horizontal',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Rotate 180',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Rotate 90 CW',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Mirror horizontal and rotate 90 CW',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Mirror horizontal and rotate 270 CW',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Rotate 270 CW',
        ],
    ];

}
