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
class CameraPictureStyle extends AbstractTag
{

    protected $Id = 175;

    protected $Name = 'CameraPictureStyle';

    protected $FullName = 'Canon::CameraInfo7D';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Camera Picture Style';

    protected $flag_Permanent = true;

    protected $Values = [
        33 => [
            'Id' => 33,
            'Label' => 'User Defined 1',
        ],
        34 => [
            'Id' => 34,
            'Label' => 'User Defined 2',
        ],
        35 => [
            'Id' => 35,
            'Label' => 'User Defined 3',
        ],
        129 => [
            'Id' => 129,
            'Label' => 'Standard',
        ],
        130 => [
            'Id' => 130,
            'Label' => 'Portrait',
        ],
        131 => [
            'Id' => 131,
            'Label' => 'Landscape',
        ],
        132 => [
            'Id' => 132,
            'Label' => 'Neutral',
        ],
        133 => [
            'Id' => 133,
            'Label' => 'Faithful',
        ],
        134 => [
            'Id' => 134,
            'Label' => 'Monochrome',
        ],
    ];

}
