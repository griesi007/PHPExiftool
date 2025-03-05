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
class PictureStyle extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'PictureStyle';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Picture Style';

    protected $Values = [
        0 => [
            'Id' => 129,
            'Label' => 'Standard',
        ],
        1 => [
            'Id' => 130,
            'Label' => 'Portrait',
        ],
        2 => [
            'Id' => 131,
            'Label' => 'Landscape',
        ],
        3 => [
            'Id' => 132,
            'Label' => 'Neutral',
        ],
        4 => [
            'Id' => 133,
            'Label' => 'Faithful',
        ],
        5 => [
            'Id' => 134,
            'Label' => 'Monochrome',
        ],
        6 => [
            'Id' => 135,
            'Label' => 'Auto',
        ],
        7 => [
            'Id' => 136,
            'Label' => 'Fine Detail',
        ],
        8 => [
            'Id' => 240,
            'Label' => 'Shot Settings',
        ],
        9 => [
            'Id' => 255,
            'Label' => 'Custom',
        ],
        10 => [
            'Id' => 0,
            'Label' => 'Standard',
        ],
        11 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        12 => [
            'Id' => 2,
            'Label' => 'Landscape',
        ],
        13 => [
            'Id' => 3,
            'Label' => 'Neutral',
        ],
        14 => [
            'Id' => 4,
            'Label' => 'Faithful',
        ],
        15 => [
            'Id' => 5,
            'Label' => 'Monochrome',
        ],
        16 => [
            'Id' => 6,
            'Label' => 'Unknown?',
        ],
        17 => [
            'Id' => 7,
            'Label' => 'Custom',
        ],
    ];

}
