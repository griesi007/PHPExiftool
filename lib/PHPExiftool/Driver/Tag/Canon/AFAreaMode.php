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
class AFAreaMode extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'AFAreaMode';

    protected $FullName = 'Canon::AFInfo2';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'AF Area Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Off (Manual Focus)',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'AF Point Expansion (surround)',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Single-point AF',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Auto',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Face Detect AF',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Face + Tracking',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Zone AF',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'AF Point Expansion (4 point)',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Spot AF',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'AF Point Expansion (8 point)',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Flexizone Multi (49 point)',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'Flexizone Multi (9 point)',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Flexizone Single',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Large Zone AF',
        ],
    ];

}
