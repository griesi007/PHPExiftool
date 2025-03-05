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
class EasyMode extends AbstractTag
{

    protected $Id = 11;

    protected $Name = 'EasyMode';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Easy Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Full auto',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Manual',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Landscape',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Fast shutter',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Slow shutter',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Night',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Gray Scale',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Sepia',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Portrait',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Sports',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Macro',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Black & White',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'Pan focus',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Vivid',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Neutral',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'Flash Off',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Long Shutter',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'Super Macro',
        ],
        18 => [
            'Id' => 18,
            'Label' => 'Foliage',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'Indoor',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'Fireworks',
        ],
        21 => [
            'Id' => 21,
            'Label' => 'Beach',
        ],
        22 => [
            'Id' => 22,
            'Label' => 'Underwater',
        ],
        23 => [
            'Id' => 23,
            'Label' => 'Snow',
        ],
        24 => [
            'Id' => 24,
            'Label' => 'Kids & Pets',
        ],
        25 => [
            'Id' => 25,
            'Label' => 'Night Snapshot',
        ],
        26 => [
            'Id' => 26,
            'Label' => 'Digital Macro',
        ],
        27 => [
            'Id' => 27,
            'Label' => 'My Colors',
        ],
        28 => [
            'Id' => 28,
            'Label' => 'Movie Snap',
        ],
        29 => [
            'Id' => 29,
            'Label' => 'Super Macro 2',
        ],
        30 => [
            'Id' => 30,
            'Label' => 'Color Accent',
        ],
        31 => [
            'Id' => 31,
            'Label' => 'Color Swap',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'Aquarium',
        ],
        33 => [
            'Id' => 33,
            'Label' => 'ISO 3200',
        ],
        34 => [
            'Id' => 34,
            'Label' => 'ISO 6400',
        ],
        35 => [
            'Id' => 35,
            'Label' => 'Creative Light Effect',
        ],
        36 => [
            'Id' => 36,
            'Label' => 'Easy',
        ],
        37 => [
            'Id' => 37,
            'Label' => 'Quick Shot',
        ],
        38 => [
            'Id' => 38,
            'Label' => 'Creative Auto',
        ],
        39 => [
            'Id' => 39,
            'Label' => 'Zoom Blur',
        ],
        40 => [
            'Id' => 40,
            'Label' => 'Low Light',
        ],
        41 => [
            'Id' => 41,
            'Label' => 'Nostalgic',
        ],
        42 => [
            'Id' => 42,
            'Label' => 'Super Vivid',
        ],
        43 => [
            'Id' => 43,
            'Label' => 'Poster Effect',
        ],
        44 => [
            'Id' => 44,
            'Label' => 'Face Self-timer',
        ],
        45 => [
            'Id' => 45,
            'Label' => 'Smile',
        ],
        46 => [
            'Id' => 46,
            'Label' => 'Wink Self-timer',
        ],
        47 => [
            'Id' => 47,
            'Label' => 'Fisheye Effect',
        ],
        48 => [
            'Id' => 48,
            'Label' => 'Miniature Effect',
        ],
        49 => [
            'Id' => 49,
            'Label' => 'High-speed Burst',
        ],
        50 => [
            'Id' => 50,
            'Label' => 'Best Image Selection',
        ],
        51 => [
            'Id' => 51,
            'Label' => 'High Dynamic Range',
        ],
        52 => [
            'Id' => 52,
            'Label' => 'Handheld Night Scene',
        ],
        53 => [
            'Id' => 53,
            'Label' => 'Movie Digest',
        ],
        54 => [
            'Id' => 54,
            'Label' => 'Live View Control',
        ],
        55 => [
            'Id' => 55,
            'Label' => 'Discreet',
        ],
        56 => [
            'Id' => 56,
            'Label' => 'Blur Reduction',
        ],
        57 => [
            'Id' => 57,
            'Label' => 'Monochrome',
        ],
        58 => [
            'Id' => 58,
            'Label' => 'Toy Camera Effect',
        ],
        59 => [
            'Id' => 59,
            'Label' => 'Scene Intelligent Auto',
        ],
        60 => [
            'Id' => 60,
            'Label' => 'High-speed Burst HQ',
        ],
        61 => [
            'Id' => 61,
            'Label' => 'Smooth Skin',
        ],
        62 => [
            'Id' => 62,
            'Label' => 'Soft Focus',
        ],
        68 => [
            'Id' => 68,
            'Label' => 'Food',
        ],
        84 => [
            'Id' => 84,
            'Label' => 'HDR Art Standard',
        ],
        85 => [
            'Id' => 85,
            'Label' => 'HDR Art Vivid',
        ],
        93 => [
            'Id' => 93,
            'Label' => 'HDR Art Bold',
        ],
        257 => [
            'Id' => 257,
            'Label' => 'Spotlight',
        ],
        258 => [
            'Id' => 258,
            'Label' => 'Night 2',
        ],
        259 => [
            'Id' => 259,
            'Label' => 'Night+',
        ],
        260 => [
            'Id' => 260,
            'Label' => 'Super Night',
        ],
        261 => [
            'Id' => 261,
            'Label' => 'Sunset',
        ],
        263 => [
            'Id' => 263,
            'Label' => 'Night Scene',
        ],
        264 => [
            'Id' => 264,
            'Label' => 'Surface',
        ],
        265 => [
            'Id' => 265,
            'Label' => 'Low Light 2',
        ],
    ];

}
