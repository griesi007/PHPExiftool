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
class ColorDataVersion extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'ColorDataVersion';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = false;

    protected $Description = 'Color Data Version';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 1,
            'Label' => '1 (1DmkIIN/5D/30D/400D)',
        ],
        1 => [
            'Id' => 2,
            'Label' => '2 (1DmkIII)',
        ],
        2 => [
            'Id' => 3,
            'Label' => '3 (40D)',
        ],
        3 => [
            'Id' => 4,
            'Label' => '4 (1DSmkIII)',
        ],
        4 => [
            'Id' => 5,
            'Label' => '5 (450D/1000D)',
        ],
        5 => [
            'Id' => 6,
            'Label' => '6 (50D/5DmkII)',
        ],
        6 => [
            'Id' => 7,
            'Label' => '7 (500D/550D/7D/1DmkIV)',
        ],
        7 => [
            'Id' => 9,
            'Label' => '9 (60D/1100D)',
        ],
        8 => [
            'Id' => '-4',
            'Label' => '-4 (M100/M5/M6)',
        ],
        9 => [
            'Id' => '-3',
            'Label' => '-3 (M10/M3)',
        ],
        10 => [
            'Id' => 10,
            'Label' => '10 (600D/1200D)',
        ],
        11 => [
            'Id' => 10,
            'Label' => '10 (1DX/5DmkIII/6D/70D/100D/650D/700D/M)',
        ],
        12 => [
            'Id' => 11,
            'Label' => '11 (7DmkII/750D/760D)',
        ],
        13 => [
            'Id' => 12,
            'Label' => '12 (5DS/5DSR)',
        ],
        14 => [
            'Id' => 13,
            'Label' => '13 (80D)',
        ],
        15 => [
            'Id' => 14,
            'Label' => '14 (1300D/2000D/4000D)',
        ],
        16 => [
            'Id' => 15,
            'Label' => '15 (6DmkII/77D/200D/800D)',
        ],
        17 => [
            'Id' => 16,
            'Label' => '16 (M50)',
        ],
        18 => [
            'Id' => 17,
            'Label' => '17 (EOS R)',
        ],
        19 => [
            'Id' => 18,
            'Label' => '18 (EOS RP)',
        ],
        20 => [
            'Id' => 19,
            'Label' => '19 (90D/M6mkII/M200)',
        ],
    ];

}
