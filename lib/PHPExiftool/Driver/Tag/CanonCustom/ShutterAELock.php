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
class ShutterAELock extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'Shutter-AELock';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Shutter-AE Lock';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'AF/AE lock',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'AF/AF lock, No AE lock',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'AE/AF, No AE lock',
        ],
        '0 0' => [
            'Id' => '0 0',
            'Label' => 'AF/AE lock',
        ],
        '1 0' => [
            'Id' => '1 0',
            'Label' => 'AE lock/AF',
        ],
        '2 0' => [
            'Id' => '2 0',
            'Label' => 'AF/AF lock, No AE lock',
        ],
        '3 0' => [
            'Id' => '3 0',
            'Label' => 'AE/AF, No AE lock',
        ],
        4 => [
            'Id' => 0,
            'Label' => 'AF/AE lock',
        ],
        5 => [
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ],
        6 => [
            'Id' => 2,
            'Label' => 'AF/AF lock, No AE lock',
        ],
        7 => [
            'Id' => 3,
            'Label' => 'AE/AF, No AE lock',
        ],
        8 => [
            'Id' => 0,
            'Label' => 'AF/AE lock',
        ],
        9 => [
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ],
        10 => [
            'Id' => 2,
            'Label' => 'AF/AF lock, No AE lock',
        ],
        11 => [
            'Id' => 3,
            'Label' => 'AE/AF, No AE lock',
        ],
        12 => [
            'Id' => 0,
            'Label' => 'AF/AE lock',
        ],
        13 => [
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ],
        14 => [
            'Id' => 2,
            'Label' => 'AF/AF lock, No AE lock',
        ],
        15 => [
            'Id' => 3,
            'Label' => 'AE/AF, No AE lock',
        ],
        16 => [
            'Id' => 0,
            'Label' => 'AF/AE lock',
        ],
        17 => [
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ],
        18 => [
            'Id' => 2,
            'Label' => 'AF/AF lock, No AE lock',
        ],
        19 => [
            'Id' => 3,
            'Label' => 'AE/AF, No AE lock',
        ],
        20 => [
            'Id' => 0,
            'Label' => 'AF/AE lock',
        ],
        21 => [
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ],
        22 => [
            'Id' => 2,
            'Label' => 'AF/AF lock, No AE lock',
        ],
        23 => [
            'Id' => 3,
            'Label' => 'AE/AF, No AE lock',
        ],
        24 => [
            'Id' => 0,
            'Label' => 'AF/AE lock',
        ],
        25 => [
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ],
        26 => [
            'Id' => 2,
            'Label' => 'AF/AF lock',
        ],
        27 => [
            'Id' => 3,
            'Label' => 'AE+release/AE+AF',
        ],
    ];

    protected $Index = 'mixed';

}
