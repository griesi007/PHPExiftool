<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PictureStyleUserDef extends AbstractTag
{

    protected $Id = 16392;

    protected $Name = 'PictureStyleUserDef';

    protected $FullName = 'Canon::Main';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Picture Style User Def';

    protected $flag_Permanent = true;

    protected $MaxLength = 3;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'None',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Standard',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Portrait',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'High Saturation',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Adobe RGB',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Low Saturation',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'CM Set 1',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'CM Set 2',
        ],
        33 => [
            'Id' => 33,
            'Label' => 'User Def. 1',
        ],
        34 => [
            'Id' => 34,
            'Label' => 'User Def. 2',
        ],
        35 => [
            'Id' => 35,
            'Label' => 'User Def. 3',
        ],
        65 => [
            'Id' => 65,
            'Label' => 'PC 1',
        ],
        66 => [
            'Id' => 66,
            'Label' => 'PC 2',
        ],
        67 => [
            'Id' => 67,
            'Label' => 'PC 3',
        ],
        129 => [
            'Id' => 129,
            'Label' => 'Standard',
        ],
        130 => [
            'Id' => 130,
            'Label' => 'Portrait',
        ],
        131 => [
            'Id' => 131,
            'Label' => 'Landscape',
        ],
        132 => [
            'Id' => 132,
            'Label' => 'Neutral',
        ],
        133 => [
            'Id' => 133,
            'Label' => 'Faithful',
        ],
        134 => [
            'Id' => 134,
            'Label' => 'Monochrome',
        ],
        135 => [
            'Id' => 135,
            'Label' => 'Auto',
        ],
        136 => [
            'Id' => 136,
            'Label' => 'Fine Detail',
        ],
        255 => [
            'Id' => 255,
            'Label' => 'n/a',
        ],
        65535 => [
            'Id' => 65535,
            'Label' => 'n/a',
        ],
    ];

}
