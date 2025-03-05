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
class ArtMode extends AbstractTag
{

    protected $Id = 12315;

    protected $Name = 'ArtMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Art Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Normal',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Silent Movie',
        ],
        39 => [
            'Id' => 39,
            'Label' => 'HDR',
        ],
        45 => [
            'Id' => 45,
            'Label' => 'Premium Auto',
        ],
        47 => [
            'Id' => 47,
            'Label' => 'Painting',
        ],
        49 => [
            'Id' => 49,
            'Label' => 'Crayon Drawing',
        ],
        51 => [
            'Id' => 51,
            'Label' => 'Panorama',
        ],
        52 => [
            'Id' => 52,
            'Label' => 'Art HDR',
        ],
        62 => [
            'Id' => 62,
            'Label' => 'High Speed Night Shot',
        ],
        64 => [
            'Id' => 64,
            'Label' => 'Monochrome',
        ],
        67 => [
            'Id' => 67,
            'Label' => 'Toy Camera',
        ],
        68 => [
            'Id' => 68,
            'Label' => 'Pop Art',
        ],
        69 => [
            'Id' => 69,
            'Label' => 'Light Tone',
        ],
    ];

}
