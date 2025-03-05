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
class ImageStabilization extends AbstractTag
{

    protected $Id = 34;

    protected $Name = 'ImageStabilization';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Image Stabilization';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'On',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Shoot Only',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Panning',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Dynamic',
        ],
        256 => [
            'Id' => 256,
            'Label' => 'Off (2)',
        ],
        257 => [
            'Id' => 257,
            'Label' => 'On (2)',
        ],
        258 => [
            'Id' => 258,
            'Label' => 'Shoot Only (2)',
        ],
        259 => [
            'Id' => 259,
            'Label' => 'Panning (2)',
        ],
        260 => [
            'Id' => 260,
            'Label' => 'Dynamic (2)',
        ],
    ];

}
