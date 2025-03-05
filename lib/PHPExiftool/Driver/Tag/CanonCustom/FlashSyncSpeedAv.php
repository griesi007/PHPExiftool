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
class FlashSyncSpeedAv extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'FlashSyncSpeedAv';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Flash Sync Speed Av';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        1 => [
            'Id' => 1,
            'Label' => '1/200 Fixed',
        ],
        2 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        3 => [
            'Id' => 1,
            'Label' => '1/250 Fixed',
        ],
        4 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        5 => [
            'Id' => 1,
            'Label' => '1/250-1/60 Auto',
        ],
        6 => [
            'Id' => 2,
            'Label' => '1/250 Fixed',
        ],
        7 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        8 => [
            'Id' => 1,
            'Label' => '1/200 Fixed',
        ],
        9 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        10 => [
            'Id' => 1,
            'Label' => '1/300 Fixed',
        ],
        11 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        12 => [
            'Id' => 1,
            'Label' => '1/300-1/60 Auto',
        ],
        13 => [
            'Id' => 2,
            'Label' => '1/300 Fixed',
        ],
        14 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        15 => [
            'Id' => 1,
            'Label' => '1/200-1/60 Auto',
        ],
        16 => [
            'Id' => 2,
            'Label' => '1/200 Fixed',
        ],
        17 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        18 => [
            'Id' => 1,
            'Label' => '1/250 Fixed',
        ],
        19 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        20 => [
            'Id' => 1,
            'Label' => '1/250 Fixed',
        ],
        21 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        22 => [
            'Id' => 1,
            'Label' => '1/200 Fixed',
        ],
        23 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        24 => [
            'Id' => 1,
            'Label' => '1/200 Fixed',
        ],
        25 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        26 => [
            'Id' => 1,
            'Label' => '1/200 Fixed',
        ],
        27 => [
            'Id' => 0,
            'Label' => 'Auto',
        ],
        28 => [
            'Id' => 1,
            'Label' => '1/200 Fixed',
        ],
    ];

    protected $Index = 'mixed';

}
