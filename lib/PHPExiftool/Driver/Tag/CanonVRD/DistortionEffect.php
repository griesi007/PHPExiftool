<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class DistortionEffect extends AbstractTag
{

    protected $Id = 132873;

    protected $Name = 'DistortionEffect';

    protected $FullName = 'CanonVRD::DR4';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Distortion Effect';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Shot Settings',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Emphasize Linearity',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Emphasize Distance',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Emphasize Periphery',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Emphasize Center',
        ],
    ];

}
