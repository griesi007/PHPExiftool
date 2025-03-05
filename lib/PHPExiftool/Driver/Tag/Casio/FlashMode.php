<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FlashMode extends AbstractTag
{

    protected $Id = 4;

    protected $Name = 'FlashMode';

    protected $FullName = 'Casio::Main';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        1 => [
            'Id' => 2,
            'Label' => 'On',
        ],
        2 => [
            'Id' => 3,
            'Label' => 'Off',
        ],
        3 => [
            'Id' => 4,
            'Label' => 'Off',
        ],
        4 => [
            'Id' => 5,
            'Label' => 'Red-eye Reduction',
        ],
        5 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        6 => [
            'Id' => 2,
            'Label' => 'On',
        ],
        7 => [
            'Id' => 3,
            'Label' => 'Off',
        ],
        8 => [
            'Id' => 4,
            'Label' => 'Red-eye Reduction',
        ],
    ];

    protected $Index = 'mixed';

}
