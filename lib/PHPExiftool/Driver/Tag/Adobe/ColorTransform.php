<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Adobe;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ColorTransform extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'ColorTransform';

    protected $FullName = 'JPEG::Adobe';

    protected $GroupName = 'Adobe';

    protected $g0 = 'APP14';

    protected $g1 = 'Adobe';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Color Transform';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Unknown (RGB or CMYK)',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'YCbCr',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'YCCK',
        ],
    ];

}
