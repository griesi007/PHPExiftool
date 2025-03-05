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
class AFPoint extends AbstractTag
{

    protected $Id = 24;

    protected $Name = 'AFPoint';

    protected $FullName = 'Casio::Main';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Point';

    protected $flag_Permanent = true;

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Center',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Upper Left',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Upper Right',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Near Left/Right of Center',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Far Left/Right of Center',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Far Left/Right of Center/Bottom',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Top Near-left',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Near Upper/Left',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Top Near-right',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Top Left',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Top Center',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'Top Right',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Center Left',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Center Right',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'Bottom Left',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Bottom Center',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'Bottom Right',
        ],
    ];

}
