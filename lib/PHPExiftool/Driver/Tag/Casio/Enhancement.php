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
class Enhancement extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'Enhancement';

    protected $FullName = 'mixed';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Enhancement';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 1,
            'Label' => 'Off',
        ],
        1 => [
            'Id' => 2,
            'Label' => 'Red',
        ],
        2 => [
            'Id' => 3,
            'Label' => 'Green',
        ],
        3 => [
            'Id' => 4,
            'Label' => 'Blue',
        ],
        4 => [
            'Id' => 5,
            'Label' => 'Flesh Tones',
        ],
        5 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        6 => [
            'Id' => 1,
            'Label' => 'Scenery',
        ],
        7 => [
            'Id' => 3,
            'Label' => 'Green',
        ],
        8 => [
            'Id' => 5,
            'Label' => 'Underwater',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Flesh Tones',
        ],
    ];

}
