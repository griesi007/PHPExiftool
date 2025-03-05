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
class BracketMode extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'BracketMode';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Bracket Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'AEB',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'FEB',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'ISO',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'WB',
        ],
    ];

}
