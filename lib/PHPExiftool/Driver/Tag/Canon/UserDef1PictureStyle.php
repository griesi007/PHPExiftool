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
class UserDef1PictureStyle extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'UserDef1PictureStyle';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'User Def 1 Picture Style';

    protected $flag_Permanent = true;

    protected $Values = [
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
    ];

}
