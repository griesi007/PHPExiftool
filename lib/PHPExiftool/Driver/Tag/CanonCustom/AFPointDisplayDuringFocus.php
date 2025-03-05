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
class AFPointDisplayDuringFocus extends AbstractTag
{

    protected $Id = 1292;

    protected $Name = 'AFPointDisplayDuringFocus';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AF Point Display During Focus';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'On',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Off',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'On (when focus achieved)',
        ],
        3 => [
            'Id' => 0,
            'Label' => 'Selected (constant)',
        ],
        4 => [
            'Id' => 1,
            'Label' => 'All (constant)',
        ],
        5 => [
            'Id' => 2,
            'Label' => 'Selected (pre-AF, focused)',
        ],
        6 => [
            'Id' => 3,
            'Label' => 'Selected (focused)',
        ],
        7 => [
            'Id' => 4,
            'Label' => 'Disable display',
        ],
    ];

    protected $Index = 'mixed';

}
