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
class RecordingMode extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'RecordingMode';

    protected $FullName = 'Casio::Main';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Recording Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Single Shutter',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Panorama',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Night Scene',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Portrait',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Landscape',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Panorama',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Night Scene',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'Portrait',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Landscape',
        ],
    ];

}
