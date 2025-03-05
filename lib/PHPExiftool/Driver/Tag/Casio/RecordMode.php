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
class RecordMode extends AbstractTag
{

    protected $Id = 12288;

    protected $Name = 'RecordMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Record Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        2 => [
            'Id' => 2,
            'Label' => 'Program AE',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Shutter Priority',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Aperture Priority',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Manual',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Best Shot',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'Movie',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'Movie (19)',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'YouTube Movie',
        ],
        '2 0' => [
            'Id' => '2 0',
            'Label' => 'Program AE',
        ],
        '3 0' => [
            'Id' => '3 0',
            'Label' => 'Shutter Priority',
        ],
        '4 0' => [
            'Id' => '4 0',
            'Label' => 'Aperture Priority',
        ],
        '5 0' => [
            'Id' => '5 0',
            'Label' => 'Manual',
        ],
        '6 0' => [
            'Id' => '6 0',
            'Label' => 'Best Shot',
        ],
    ];

}
