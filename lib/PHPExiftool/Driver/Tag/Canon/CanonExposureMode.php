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
class CanonExposureMode extends AbstractTag
{

    protected $Id = 20;

    protected $Name = 'CanonExposureMode';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Canon Exposure Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Easy',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Program AE',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Shutter speed priority AE',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Aperture-priority AE',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Manual',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Depth-of-field AE',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'M-Dep',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Bulb',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Flexible-priority AE',
        ],
    ];

}
