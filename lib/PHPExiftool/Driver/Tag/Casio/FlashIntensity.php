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
class FlashIntensity extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'FlashIntensity';

    protected $FullName = 'Casio::Main';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Intensity';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 11,
            'Label' => 'Weak',
        ],
        1 => [
            'Id' => 12,
            'Label' => 'Low',
        ],
        2 => [
            'Id' => 13,
            'Label' => 'Normal',
        ],
        3 => [
            'Id' => 14,
            'Label' => 'High',
        ],
        4 => [
            'Id' => 15,
            'Label' => 'Strong',
        ],
        5 => [
            'Id' => 1,
            'Label' => 'Normal',
        ],
        6 => [
            'Id' => 2,
            'Label' => 'Weak',
        ],
        7 => [
            'Id' => 3,
            'Label' => 'Strong',
        ],
    ];

}
