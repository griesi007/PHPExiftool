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
class AutoISO extends AbstractTag
{

    protected $Id = 12296;

    protected $Name = 'AutoISO';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Auto ISO';

    protected $flag_Permanent = true;

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'On',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Off',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'On (high sensitivity)',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'On (anti-shake)',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'High Speed',
        ],
    ];

}
