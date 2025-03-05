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
class ObjectFileType extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'ObjectFileType';

    protected $FullName = 'mixed';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'Object File Type';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'None',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Relocatable file',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Executable file',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Shared object file',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Core file',
        ],
        5 => [
            'Id' => '-1',
            'Label' => 'Static library',
        ],
        6 => [
            'Id' => 1,
            'Label' => 'Relocatable object',
        ],
        7 => [
            'Id' => 2,
            'Label' => 'Demand paged executable',
        ],
        8 => [
            'Id' => 3,
            'Label' => 'Fixed VM shared library',
        ],
        9 => [
            'Id' => 4,
            'Label' => 'Core',
        ],
        10 => [
            'Id' => 5,
            'Label' => 'Preloaded executable',
        ],
        11 => [
            'Id' => 6,
            'Label' => 'Dynamically bound shared library',
        ],
        12 => [
            'Id' => 7,
            'Label' => 'Dynamic link editor',
        ],
        13 => [
            'Id' => 8,
            'Label' => 'Dynamically bound bundle',
        ],
        14 => [
            'Id' => 9,
            'Label' => 'Shared library stub for static linking',
        ],
        15 => [
            'Id' => 10,
            'Label' => 'Debug information',
        ],
        16 => [
            'Id' => 11,
            'Label' => 'x86_64 kexts',
        ],
        17 => [
            'Id' => 0,
            'Label' => 'Unknown',
        ],
        18 => [
            'Id' => 1,
            'Label' => 'Executable application',
        ],
        19 => [
            'Id' => 2,
            'Label' => 'Dynamic link library',
        ],
        20 => [
            'Id' => 3,
            'Label' => 'Driver',
        ],
        21 => [
            'Id' => 4,
            'Label' => 'Font',
        ],
        22 => [
            'Id' => 5,
            'Label' => 'VxD',
        ],
        23 => [
            'Id' => 7,
            'Label' => 'Static library',
        ],
    ];

}
