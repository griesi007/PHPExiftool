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
class MirrorLockup extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'MirrorLockup';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Mirror Lockup';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
        2 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        3 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
        4 => [
            'Id' => 2,
            'Label' => 'Enable: Down with Set',
        ],
        5 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        6 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
        7 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        8 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
        9 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        10 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
        11 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        12 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
        13 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        14 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
        15 => [
            'Id' => 0,
            'Label' => 'Disable',
        ],
        16 => [
            'Id' => 1,
            'Label' => 'Enable',
        ],
    ];

}
