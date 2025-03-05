<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Apple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class RunTimeFlags extends AbstractTag
{

    protected $Id = 'flags';

    protected $Name = 'RunTimeFlags';

    protected $FullName = 'Apple::RunTime';

    protected $GroupName = 'Apple';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Apple';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Run Time Flags';

    protected $flag_Permanent = true;

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Valid',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Has been rounded',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Positive infinity',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Negative infinity',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Indefinite',
        ],
    ];

}
