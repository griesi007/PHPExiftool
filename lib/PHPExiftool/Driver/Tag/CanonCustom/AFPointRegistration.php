<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFPointRegistration extends AbstractTag
{

    protected $Id = 7;

    protected $Name = 'AFPointRegistration';

    protected $FullName = 'CanonCustom::Functions10D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Registration';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Center',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Bottom',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Right',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Extreme Right',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Automatic',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Extreme Left',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Left',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Top',
        ],
    ];

}
