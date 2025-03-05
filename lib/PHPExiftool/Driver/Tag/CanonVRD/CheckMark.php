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
class CheckMark extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CheckMark';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Check Mark';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Clear',
        ],
        1 => [
            'Id' => 1,
            'Label' => 1,
        ],
        2 => [
            'Id' => 2,
            'Label' => 2,
        ],
        3 => [
            'Id' => 3,
            'Label' => 3,
        ],
        4 => [
            'Id' => 4,
            'Label' => 4,
        ],
        5 => [
            'Id' => 5,
            'Label' => 5,
        ],
        6 => [
            'Id' => 0,
            'Label' => 'Clear',
        ],
        7 => [
            'Id' => 1,
            'Label' => 1,
        ],
        8 => [
            'Id' => 2,
            'Label' => 2,
        ],
        9 => [
            'Id' => 3,
            'Label' => 3,
        ],
    ];

}
