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
class AutoRotate extends AbstractTag
{

    protected $Id = 27;

    protected $Name = 'AutoRotate';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Auto Rotate';

    protected $flag_Permanent = true;

    protected $Values = [
        '-1' => [
            'Id' => '-1',
            'Label' => 'n/a',
        ],
        0 => [
            'Id' => 0,
            'Label' => 'None',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Rotate 90 CW',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Rotate 180',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Rotate 270 CW',
        ],
    ];

}
