<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WorkColorSpace extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'WorkColorSpace';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Work Color Space';

    protected $Values = [
        0 => [
            'Id' => 1,
            'Label' => 'sRGB',
        ],
        1 => [
            'Id' => 2,
            'Label' => 'Adobe RGB',
        ],
        2 => [
            'Id' => 3,
            'Label' => 'Wide Gamut RGB',
        ],
        3 => [
            'Id' => 4,
            'Label' => 'Apple RGB',
        ],
        4 => [
            'Id' => 5,
            'Label' => 'ColorMatch RGB',
        ],
        5 => [
            'Id' => 0,
            'Label' => 'sRGB',
        ],
        6 => [
            'Id' => 1,
            'Label' => 'Adobe RGB',
        ],
        7 => [
            'Id' => 2,
            'Label' => 'Wide Gamut RGB',
        ],
        8 => [
            'Id' => 3,
            'Label' => 'Apple RGB',
        ],
        9 => [
            'Id' => 4,
            'Label' => 'ColorMatch RGB',
        ],
    ];

}
