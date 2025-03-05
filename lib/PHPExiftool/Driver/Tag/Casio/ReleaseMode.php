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
class ReleaseMode extends AbstractTag
{

    protected $Id = 12289;

    protected $Name = 'ReleaseMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Release Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Normal',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'AE Bracketing',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'WB Bracketing',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Contrast Bracketing',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'High Speed Burst',
        ],
    ];

}
