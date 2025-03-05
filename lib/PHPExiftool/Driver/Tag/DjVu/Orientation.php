<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DjVu;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Orientation extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'Orientation';

    protected $FullName = 'DjVu::Info';

    protected $GroupName = 'DjVu';

    protected $g0 = 'DjVu';

    protected $g1 = 'DjVu';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Orientation';

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Horizontal (normal)',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Rotate 180',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Rotate 90 CW',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Rotate 270 CW',
        ],
    ];

}
