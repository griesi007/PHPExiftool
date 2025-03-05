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
class AmbienceSelection extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'AmbienceSelection';

    protected $FullName = 'Canon::Ambience';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Ambience Selection';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Standard',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Vivid',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Warm',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Soft',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Cool',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Intense',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Brighter',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Darker',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Monochrome',
        ],
    ];

}
