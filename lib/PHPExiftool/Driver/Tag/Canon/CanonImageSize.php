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
class CanonImageSize extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CanonImageSize';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Canon Image Size';

    protected $flag_Permanent = true;

    protected $Values = [
        '-1' => [
            'Id' => '-1',
            'Label' => 'n/a',
        ],
        0 => [
            'Id' => 0,
            'Label' => 'Large',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Medium',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Small',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Medium 1',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Medium 2',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Medium 3',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Postcard',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Widescreen',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Medium Widescreen',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Small 1',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'Small 2',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Small 3',
        ],
        128 => [
            'Id' => 128,
            'Label' => '640x480 Movie',
        ],
        129 => [
            'Id' => 129,
            'Label' => 'Medium Movie',
        ],
        130 => [
            'Id' => 130,
            'Label' => 'Small Movie',
        ],
        137 => [
            'Id' => 137,
            'Label' => '1280x720 Movie',
        ],
        142 => [
            'Id' => 142,
            'Label' => '1920x1080 Movie',
        ],
        143 => [
            'Id' => 143,
            'Label' => '4096x2160 Movie',
        ],
    ];

}
