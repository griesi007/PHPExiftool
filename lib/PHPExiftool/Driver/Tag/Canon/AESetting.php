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
class AESetting extends AbstractTag
{

    protected $Id = 33;

    protected $Name = 'AESetting';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'AE Setting';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Normal AE',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Exposure Compensation',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'AE Lock',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'AE Lock + Exposure Comp.',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'No AE',
        ],
    ];

}
