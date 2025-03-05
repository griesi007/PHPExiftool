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
class Rotation extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'Rotation';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Rotation';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 0,
        ],
        1 => [
            'Id' => 1,
            'Label' => 90,
        ],
        2 => [
            'Id' => 2,
            'Label' => 180,
        ],
        3 => [
            'Id' => 3,
            'Label' => 270,
        ],
    ];

}
