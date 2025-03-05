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
class Categories extends AbstractTag
{

    protected $Id = 35;

    protected $Name = 'Categories';

    protected $FullName = 'Canon::Main';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Categories';

    protected $flag_Permanent = true;

    protected $MaxLength = 2;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => '(none)',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'People',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Events',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'User 1',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'User 2',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'User 3',
        ],
        64 => [
            'Id' => 64,
            'Label' => 'To Do',
        ],
    ];

}
