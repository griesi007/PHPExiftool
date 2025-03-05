<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Subsystem extends AbstractTag
{

    protected $Id = 44;

    protected $Name = 'Subsystem';

    protected $FullName = 'EXE::Main';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Subsystem';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Unknown',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Native',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Windows GUI',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Windows command line',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'OS/2 command line',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'POSIX command line',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Windows CE GUI',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'EFI application',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'EFI boot service',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'EFI runtime driver',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'EFI ROM',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'XBOX',
        ],
    ];

}
