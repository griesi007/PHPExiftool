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
class CropAspectRatio extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CropAspectRatio';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Crop Aspect Ratio';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Free',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Custom',
        ],
        2 => [
            'Id' => 2,
            'Label' => '1:1',
        ],
        3 => [
            'Id' => 3,
            'Label' => '3:2',
        ],
        4 => [
            'Id' => 4,
            'Label' => '2:3',
        ],
        5 => [
            'Id' => 5,
            'Label' => '4:3',
        ],
        6 => [
            'Id' => 6,
            'Label' => '3:4',
        ],
        7 => [
            'Id' => 7,
            'Label' => '5:4',
        ],
        8 => [
            'Id' => 8,
            'Label' => '4:5',
        ],
        9 => [
            'Id' => 9,
            'Label' => '16:9',
        ],
        10 => [
            'Id' => 10,
            'Label' => '9:16',
        ],
        11 => [
            'Id' => 0,
            'Label' => 'Free',
        ],
        12 => [
            'Id' => 1,
            'Label' => '3:2',
        ],
        13 => [
            'Id' => 2,
            'Label' => '2:3',
        ],
        14 => [
            'Id' => 3,
            'Label' => '4:3',
        ],
        15 => [
            'Id' => 4,
            'Label' => '3:4',
        ],
        16 => [
            'Id' => 5,
            'Label' => 'A-size Landscape',
        ],
        17 => [
            'Id' => 6,
            'Label' => 'A-size Portrait',
        ],
        18 => [
            'Id' => 7,
            'Label' => 'Letter-size Landscape',
        ],
        19 => [
            'Id' => 8,
            'Label' => 'Letter-size Portrait',
        ],
        20 => [
            'Id' => 9,
            'Label' => '4:5',
        ],
        21 => [
            'Id' => 10,
            'Label' => '5:4',
        ],
        22 => [
            'Id' => 11,
            'Label' => '1:1',
        ],
        23 => [
            'Id' => 12,
            'Label' => 'Circle',
        ],
        24 => [
            'Id' => 65535,
            'Label' => 'Custom',
        ],
    ];

}
