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
class PixelFormat extends AbstractTag
{

    protected $Id = 48129;

    protected $Name = 'PixelFormat';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Pixel Format';

    protected $local_g1 = 'ExifIFD';

    protected $Values = [
        5 => [
            'Id' => 5,
            'Label' => 'Black & White',
        ],
        8 => [
            'Id' => 8,
            'Label' => '8-bit Gray',
        ],
        9 => [
            'Id' => 9,
            'Label' => '16-bit BGR555',
        ],
        10 => [
            'Id' => 10,
            'Label' => '16-bit BGR565',
        ],
        11 => [
            'Id' => 11,
            'Label' => '16-bit Gray',
        ],
        12 => [
            'Id' => 12,
            'Label' => '24-bit BGR',
        ],
        13 => [
            'Id' => 13,
            'Label' => '24-bit RGB',
        ],
        14 => [
            'Id' => 14,
            'Label' => '32-bit BGR',
        ],
        15 => [
            'Id' => 15,
            'Label' => '32-bit BGRA',
        ],
        16 => [
            'Id' => 16,
            'Label' => '32-bit PBGRA',
        ],
        17 => [
            'Id' => 17,
            'Label' => '32-bit Gray Float',
        ],
        18 => [
            'Id' => 18,
            'Label' => '48-bit RGB Fixed Point',
        ],
        19 => [
            'Id' => 19,
            'Label' => '32-bit BGR101010',
        ],
        21 => [
            'Id' => 21,
            'Label' => '48-bit RGB',
        ],
        22 => [
            'Id' => 22,
            'Label' => '64-bit RGBA',
        ],
        23 => [
            'Id' => 23,
            'Label' => '64-bit PRGBA',
        ],
        24 => [
            'Id' => 24,
            'Label' => '96-bit RGB Fixed Point',
        ],
        25 => [
            'Id' => 25,
            'Label' => '128-bit RGBA Float',
        ],
        26 => [
            'Id' => 26,
            'Label' => '128-bit PRGBA Float',
        ],
        27 => [
            'Id' => 27,
            'Label' => '128-bit RGB Float',
        ],
        28 => [
            'Id' => 28,
            'Label' => '32-bit CMYK',
        ],
        29 => [
            'Id' => 29,
            'Label' => '64-bit RGBA Fixed Point',
        ],
        30 => [
            'Id' => 30,
            'Label' => '128-bit RGBA Fixed Point',
        ],
        31 => [
            'Id' => 31,
            'Label' => '64-bit CMYK',
        ],
        32 => [
            'Id' => 32,
            'Label' => '24-bit 3 Channels',
        ],
        33 => [
            'Id' => 33,
            'Label' => '32-bit 4 Channels',
        ],
        34 => [
            'Id' => 34,
            'Label' => '40-bit 5 Channels',
        ],
        35 => [
            'Id' => 35,
            'Label' => '48-bit 6 Channels',
        ],
        36 => [
            'Id' => 36,
            'Label' => '56-bit 7 Channels',
        ],
        37 => [
            'Id' => 37,
            'Label' => '64-bit 8 Channels',
        ],
        38 => [
            'Id' => 38,
            'Label' => '48-bit 3 Channels',
        ],
        39 => [
            'Id' => 39,
            'Label' => '64-bit 4 Channels',
        ],
        40 => [
            'Id' => 40,
            'Label' => '80-bit 5 Channels',
        ],
        41 => [
            'Id' => 41,
            'Label' => '96-bit 6 Channels',
        ],
        42 => [
            'Id' => 42,
            'Label' => '112-bit 7 Channels',
        ],
        43 => [
            'Id' => 43,
            'Label' => '128-bit 8 Channels',
        ],
        44 => [
            'Id' => 44,
            'Label' => '40-bit CMYK Alpha',
        ],
        45 => [
            'Id' => 45,
            'Label' => '80-bit CMYK Alpha',
        ],
        46 => [
            'Id' => 46,
            'Label' => '32-bit 3 Channels Alpha',
        ],
        47 => [
            'Id' => 47,
            'Label' => '40-bit 4 Channels Alpha',
        ],
        48 => [
            'Id' => 48,
            'Label' => '48-bit 5 Channels Alpha',
        ],
        49 => [
            'Id' => 49,
            'Label' => '56-bit 6 Channels Alpha',
        ],
        50 => [
            'Id' => 50,
            'Label' => '64-bit 7 Channels Alpha',
        ],
        51 => [
            'Id' => 51,
            'Label' => '72-bit 8 Channels Alpha',
        ],
        52 => [
            'Id' => 52,
            'Label' => '64-bit 3 Channels Alpha',
        ],
        53 => [
            'Id' => 53,
            'Label' => '80-bit 4 Channels Alpha',
        ],
        54 => [
            'Id' => 54,
            'Label' => '96-bit 5 Channels Alpha',
        ],
        55 => [
            'Id' => 55,
            'Label' => '112-bit 6 Channels Alpha',
        ],
        56 => [
            'Id' => 56,
            'Label' => '128-bit 7 Channels Alpha',
        ],
        57 => [
            'Id' => 57,
            'Label' => '144-bit 8 Channels Alpha',
        ],
        58 => [
            'Id' => 58,
            'Label' => '64-bit RGBA Half',
        ],
        59 => [
            'Id' => 59,
            'Label' => '48-bit RGB Half',
        ],
        61 => [
            'Id' => 61,
            'Label' => '32-bit RGBE',
        ],
        62 => [
            'Id' => 62,
            'Label' => '16-bit Gray Half',
        ],
        63 => [
            'Id' => 63,
            'Label' => '32-bit Gray Fixed Point',
        ],
    ];

}
