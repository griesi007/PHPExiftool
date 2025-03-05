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
class MachineType extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'MachineType';

    protected $FullName = 'EXE::Main';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Machine Type';

    protected $Values = [
        332 => [
            'Id' => 332,
            'Label' => 'Intel 386 or later, and compatibles',
        ],
        333 => [
            'Id' => 333,
            'Label' => 'Intel i860',
        ],
        354 => [
            'Id' => 354,
            'Label' => 'MIPS R3000',
        ],
        358 => [
            'Id' => 358,
            'Label' => 'MIPS little endian (R4000)',
        ],
        360 => [
            'Id' => 360,
            'Label' => 'MIPS R10000',
        ],
        361 => [
            'Id' => 361,
            'Label' => 'MIPS little endian WCI v2',
        ],
        387 => [
            'Id' => 387,
            'Label' => 'Alpha AXP (old)',
        ],
        388 => [
            'Id' => 388,
            'Label' => 'Alpha AXP',
        ],
        418 => [
            'Id' => 418,
            'Label' => 'Hitachi SH3',
        ],
        419 => [
            'Id' => 419,
            'Label' => 'Hitachi SH3 DSP',
        ],
        422 => [
            'Id' => 422,
            'Label' => 'Hitachi SH4',
        ],
        424 => [
            'Id' => 424,
            'Label' => 'Hitachi SH5',
        ],
        448 => [
            'Id' => 448,
            'Label' => 'ARM little endian',
        ],
        450 => [
            'Id' => 450,
            'Label' => 'Thumb',
        ],
        467 => [
            'Id' => 467,
            'Label' => 'Matsushita AM33',
        ],
        496 => [
            'Id' => 496,
            'Label' => 'PowerPC little endian',
        ],
        497 => [
            'Id' => 497,
            'Label' => 'PowerPC with floating point support',
        ],
        512 => [
            'Id' => 512,
            'Label' => 'Intel IA64',
        ],
        614 => [
            'Id' => 614,
            'Label' => 'MIPS16',
        ],
        616 => [
            'Id' => 616,
            'Label' => 'Motorola 68000 series',
        ],
        644 => [
            'Id' => 644,
            'Label' => 'Alpha AXP 64-bit',
        ],
        870 => [
            'Id' => 870,
            'Label' => 'MIPS with FPU',
        ],
        1126 => [
            'Id' => 1126,
            'Label' => 'MIPS16 with FPU',
        ],
        3772 => [
            'Id' => 3772,
            'Label' => 'EFI Byte Code',
        ],
        34404 => [
            'Id' => 34404,
            'Label' => 'AMD AMD64',
        ],
        36929 => [
            'Id' => 36929,
            'Label' => 'Mitsubishi M32R little endian',
        ],
        49390 => [
            'Id' => 49390,
            'Label' => 'clr pure MSIL',
        ],
    ];

}
