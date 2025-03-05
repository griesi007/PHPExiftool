<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LongExposureNoiseReduction extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'LongExposureNoiseReduction';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Long Exposure Noise Reduction';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'On',
        ],
        3 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        4 => [
            'Id' => 1,
            'Label' => 'On',
        ],
        5 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        6 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        7 => [
            'Id' => 2,
            'Label' => 'On',
        ],
        8 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        9 => [
            'Id' => 1,
            'Label' => 'On',
        ],
        10 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        11 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        12 => [
            'Id' => 2,
            'Label' => 'On',
        ],
        13 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        14 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        15 => [
            'Id' => 2,
            'Label' => 'On',
        ],
        16 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        17 => [
            'Id' => 1,
            'Label' => 'On',
        ],
    ];

}
