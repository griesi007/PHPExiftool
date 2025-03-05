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
class SpecialEffectSetting extends AbstractTag
{

    protected $Id = 12337;

    protected $Name = 'SpecialEffectSetting';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Special Effect Setting';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Makeup',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Mist Removal',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Vivid Landscape',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Art Shot',
        ],
    ];

}
