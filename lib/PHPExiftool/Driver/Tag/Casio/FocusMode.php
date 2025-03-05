<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FocusMode extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'FocusMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 2,
            'Label' => 'Macro',
        ],
        1 => [
            'Id' => 3,
            'Label' => 'Auto',
        ],
        2 => [
            'Id' => 4,
            'Label' => 'Manual',
        ],
        3 => [
            'Id' => 5,
            'Label' => 'Infinity',
        ],
        4 => [
            'Id' => 7,
            'Label' => 'Spot AF',
        ],
        5 => [
            'Id' => 0,
            'Label' => 'Normal',
        ],
        6 => [
            'Id' => 1,
            'Label' => 'Macro',
        ],
        7 => [
            'Id' => 0,
            'Label' => 'Manual',
        ],
        8 => [
            'Id' => 1,
            'Label' => 'Focus Lock',
        ],
        9 => [
            'Id' => 2,
            'Label' => 'Macro',
        ],
        10 => [
            'Id' => 3,
            'Label' => 'Single-Area Auto Focus',
        ],
        11 => [
            'Id' => 5,
            'Label' => 'Infinity',
        ],
        12 => [
            'Id' => 6,
            'Label' => 'Multi-Area Auto Focus',
        ],
        13 => [
            'Id' => 8,
            'Label' => 'Super Macro',
        ],
    ];

}
