<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Flash extends AbstractTag
{

    protected $Id = 37385;

    protected $Name = 'Flash';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'No Flash',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Fired',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Fired, Return not detected',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Fired, Return detected',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'On, Did not fire',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'On, Fired',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'On, Return not detected',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'On, Return detected',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Off, Did not fire',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'Off, Did not fire, Return not detected',
        ],
        24 => [
            'Id' => 24,
            'Label' => 'Auto, Did not fire',
        ],
        25 => [
            'Id' => 25,
            'Label' => 'Auto, Fired',
        ],
        29 => [
            'Id' => 29,
            'Label' => 'Auto, Fired, Return not detected',
        ],
        31 => [
            'Id' => 31,
            'Label' => 'Auto, Fired, Return detected',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'No flash function',
        ],
        48 => [
            'Id' => 48,
            'Label' => 'Off, No flash function',
        ],
        65 => [
            'Id' => 65,
            'Label' => 'Fired, Red-eye reduction',
        ],
        69 => [
            'Id' => 69,
            'Label' => 'Fired, Red-eye reduction, Return not detected',
        ],
        71 => [
            'Id' => 71,
            'Label' => 'Fired, Red-eye reduction, Return detected',
        ],
        73 => [
            'Id' => 73,
            'Label' => 'On, Red-eye reduction',
        ],
        77 => [
            'Id' => 77,
            'Label' => 'On, Red-eye reduction, Return not detected',
        ],
        79 => [
            'Id' => 79,
            'Label' => 'On, Red-eye reduction, Return detected',
        ],
        80 => [
            'Id' => 80,
            'Label' => 'Off, Red-eye reduction',
        ],
        88 => [
            'Id' => 88,
            'Label' => 'Auto, Did not fire, Red-eye reduction',
        ],
        89 => [
            'Id' => 89,
            'Label' => 'Auto, Fired, Red-eye reduction',
        ],
        93 => [
            'Id' => 93,
            'Label' => 'Auto, Fired, Red-eye reduction, Return not detected',
        ],
        95 => [
            'Id' => 95,
            'Label' => 'Auto, Fired, Red-eye reduction, Return detected',
        ],
    ];

}
