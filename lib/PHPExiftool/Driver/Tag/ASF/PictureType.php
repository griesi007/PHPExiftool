<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PictureType extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'PictureType';

    protected $FullName = 'ASF::Picture';

    protected $GroupName = 'ASF';

    protected $g0 = 'ASF';

    protected $g1 = 'ASF';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Picture Type';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Other',
        ],
        1 => [
            'Id' => 1,
            'Label' => '32x32 PNG Icon',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Other Icon',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Front Cover',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Back Cover',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Leaflet',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Media',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Lead Artist',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Artist',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Conductor',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Band',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Composer',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'Lyricist',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Recording Studio or Location',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Recording Session',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'Performance',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Capture from Movie or Video',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'Bright(ly) Colored Fish',
        ],
        18 => [
            'Id' => 18,
            'Label' => 'Illustration',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'Band Logo',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'Publisher Logo',
        ],
    ];

}
