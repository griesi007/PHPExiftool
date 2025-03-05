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
class AFPointsInFocus5D extends AbstractTag
{

    protected $Id = 56;

    protected $Name = 'AFPointsInFocus5D';

    protected $FullName = 'Canon::CameraInfo5D';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16uRev';

    protected $Writable = true;

    protected $Description = 'AF Points In Focus 5D';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => '(none)',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Center',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Top',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Bottom',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Upper-left',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Upper-right',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'Lower-left',
        ],
        64 => [
            'Id' => 64,
            'Label' => 'Lower-right',
        ],
        128 => [
            'Id' => 128,
            'Label' => 'Left',
        ],
        256 => [
            'Id' => 256,
            'Label' => 'Right',
        ],
        512 => [
            'Id' => 512,
            'Label' => 'AI Servo1',
        ],
        1024 => [
            'Id' => 1024,
            'Label' => 'AI Servo2',
        ],
        2048 => [
            'Id' => 2048,
            'Label' => 'AI Servo3',
        ],
        4096 => [
            'Id' => 4096,
            'Label' => 'AI Servo4',
        ],
        8192 => [
            'Id' => 8192,
            'Label' => 'AI Servo5',
        ],
        16384 => [
            'Id' => 16384,
            'Label' => 'AI Servo6',
        ],
    ];

}
