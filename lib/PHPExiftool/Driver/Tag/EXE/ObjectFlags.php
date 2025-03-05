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
class ObjectFlags extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'ObjectFlags';

    protected $FullName = 'EXE::MachO';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Object Flags';

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'No undefs',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Incrementa link',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Dyld link',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Bind at load',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Prebound',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'Split segs',
        ],
        64 => [
            'Id' => 64,
            'Label' => 'Lazy init',
        ],
        128 => [
            'Id' => 128,
            'Label' => 'Two level',
        ],
        256 => [
            'Id' => 256,
            'Label' => 'Force flat',
        ],
        512 => [
            'Id' => 512,
            'Label' => 'No multi defs',
        ],
        1024 => [
            'Id' => 1024,
            'Label' => 'No fix prebinding',
        ],
        2048 => [
            'Id' => 2048,
            'Label' => 'Prebindable',
        ],
        4096 => [
            'Id' => 4096,
            'Label' => 'All mods bound',
        ],
        8192 => [
            'Id' => 8192,
            'Label' => 'Subsections via symbols',
        ],
        16384 => [
            'Id' => 16384,
            'Label' => 'Canonical',
        ],
        32768 => [
            'Id' => 32768,
            'Label' => 'Weak defines',
        ],
        65536 => [
            'Id' => 65536,
            'Label' => 'Binds to weak',
        ],
        131072 => [
            'Id' => 131072,
            'Label' => 'Allow stack execution',
        ],
        262144 => [
            'Id' => 262144,
            'Label' => 'Dead strippable dylib',
        ],
        524288 => [
            'Id' => 524288,
            'Label' => 'Root safe',
        ],
        1048576 => [
            'Id' => 1048576,
            'Label' => 'No reexported dylibs',
        ],
        2097152 => [
            'Id' => 2097152,
            'Label' => 'Random address',
        ],
    ];

}
