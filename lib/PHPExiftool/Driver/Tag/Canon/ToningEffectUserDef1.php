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
class ToningEffectUserDef1 extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'ToningEffectUserDef1';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Toning Effect User Def 1';

    protected $flag_Permanent = true;

    protected $Values = [
        '-559038737' => [
            'Id' => '-559038737',
            'Label' => 'n/a',
        ],
        0 => [
            'Id' => 0,
            'Label' => 'None',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Sepia',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Blue',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Purple',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Green',
        ],
    ];

}
