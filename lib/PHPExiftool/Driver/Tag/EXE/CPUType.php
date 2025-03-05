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
class CPUType extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CPUType';

    protected $FullName = 'mixed';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'CPU Type';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'None',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'AT&T WE 32100',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'SPARC',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'i386',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Motorola 68000',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Motorola 88000',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'i486',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'i860',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'MIPS R3000',
        ],
        9 => [
            'Id' => 10,
            'Label' => 'MIPS R4000',
        ],
        10 => [
            'Id' => 15,
            'Label' => 'HPPA',
        ],
        11 => [
            'Id' => 18,
            'Label' => 'Sun v8plus',
        ],
        12 => [
            'Id' => 20,
            'Label' => 'PowerPC',
        ],
        13 => [
            'Id' => 21,
            'Label' => 'PowerPC 64-bit',
        ],
        14 => [
            'Id' => 22,
            'Label' => 'IBM S/390',
        ],
        15 => [
            'Id' => 23,
            'Label' => 'Cell BE SPU',
        ],
        16 => [
            'Id' => 42,
            'Label' => 'SuperH',
        ],
        17 => [
            'Id' => 43,
            'Label' => 'SPARC v9 64-bit',
        ],
        18 => [
            'Id' => 46,
            'Label' => 'Renesas H8/300,300H,H8S',
        ],
        19 => [
            'Id' => 50,
            'Label' => 'HP/Intel IA-64',
        ],
        20 => [
            'Id' => 62,
            'Label' => 'AMD x86-64',
        ],
        21 => [
            'Id' => 76,
            'Label' => 'Axis Communications 32-bit embedded processor',
        ],
        22 => [
            'Id' => 87,
            'Label' => 'NEC v850',
        ],
        23 => [
            'Id' => 88,
            'Label' => 'Renesas M32R',
        ],
        24 => [
            'Id' => 21569,
            'Label' => 'Fujitsu FR-V',
        ],
        25 => [
            'Id' => 36902,
            'Label' => 'Alpha',
        ],
        26 => [
            'Id' => 36929,
            'Label' => 'm32r (old)',
        ],
        27 => [
            'Id' => 36992,
            'Label' => 'v850 (old)',
        ],
        28 => [
            'Id' => 41872,
            'Label' => 'S/390 (old)',
        ],
        29 => [
            'Id' => '-1',
            'Label' => 'Any',
        ],
        30 => [
            'Id' => 1,
            'Label' => 'VAX',
        ],
        31 => [
            'Id' => 2,
            'Label' => 'ROMP',
        ],
        32 => [
            'Id' => 4,
            'Label' => 'NS32032',
        ],
        33 => [
            'Id' => 5,
            'Label' => 'NS32332',
        ],
        34 => [
            'Id' => 6,
            'Label' => 'MC680x0',
        ],
        35 => [
            'Id' => 7,
            'Label' => 'x86',
        ],
        36 => [
            'Id' => 8,
            'Label' => 'MIPS',
        ],
        37 => [
            'Id' => 9,
            'Label' => 'NS32532',
        ],
        38 => [
            'Id' => 10,
            'Label' => 'MC98000',
        ],
        39 => [
            'Id' => 11,
            'Label' => 'HPPA',
        ],
        40 => [
            'Id' => 12,
            'Label' => 'ARM',
        ],
        41 => [
            'Id' => 13,
            'Label' => 'MC88000',
        ],
        42 => [
            'Id' => 14,
            'Label' => 'SPARC',
        ],
        43 => [
            'Id' => 15,
            'Label' => 'i860 big endian',
        ],
        44 => [
            'Id' => 16,
            'Label' => 'i860 little endian',
        ],
        45 => [
            'Id' => 17,
            'Label' => 'RS6000',
        ],
        46 => [
            'Id' => 18,
            'Label' => 'PowerPC',
        ],
        47 => [
            'Id' => 255,
            'Label' => 'VEO',
        ],
    ];

    protected $flag_List = false;

}
