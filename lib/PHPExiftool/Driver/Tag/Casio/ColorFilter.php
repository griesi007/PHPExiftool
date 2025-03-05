<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ColorFilter extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'ColorFilter';

    protected $FullName = 'mixed';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Filter';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 1,
            'Label' => 'Off',
        ],
        1 => [
            'Id' => 2,
            'Label' => 'Black & White',
        ],
        2 => [
            'Id' => 3,
            'Label' => 'Sepia',
        ],
        3 => [
            'Id' => 4,
            'Label' => 'Red',
        ],
        4 => [
            'Id' => 5,
            'Label' => 'Green',
        ],
        5 => [
            'Id' => 6,
            'Label' => 'Blue',
        ],
        6 => [
            'Id' => 7,
            'Label' => 'Yellow',
        ],
        7 => [
            'Id' => 8,
            'Label' => 'Pink',
        ],
        8 => [
            'Id' => 9,
            'Label' => 'Purple',
        ],
        9 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        10 => [
            'Id' => 1,
            'Label' => 'Blue',
        ],
        11 => [
            'Id' => 3,
            'Label' => 'Green',
        ],
        12 => [
            'Id' => 4,
            'Label' => 'Yellow',
        ],
        13 => [
            'Id' => 5,
            'Label' => 'Red',
        ],
        14 => [
            'Id' => 6,
            'Label' => 'Purple',
        ],
        15 => [
            'Id' => 7,
            'Label' => 'Pink',
        ],
    ];

}
