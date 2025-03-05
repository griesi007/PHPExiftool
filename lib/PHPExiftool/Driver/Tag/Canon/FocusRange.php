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
class FocusRange extends AbstractTag
{

    protected $Id = 18;

    protected $Name = 'FocusRange';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Focus Range';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Manual',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Not Known',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Macro',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Very Close',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Close',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Middle Range',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Far Range',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Pan Focus',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Super Macro',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Infinity',
        ],
    ];

}
