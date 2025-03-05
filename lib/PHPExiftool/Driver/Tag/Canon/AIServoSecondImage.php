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
class AIServoSecondImage extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'AIServoSecondImage';

    protected $FullName = 'Canon::AFConfig';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AI Servo Second Image';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Equal Priority',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Release Priority',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Focus Priority',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Release High Priority',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Focus High Priority',
        ],
    ];

}
