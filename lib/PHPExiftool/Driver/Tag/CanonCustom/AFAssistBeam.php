<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFAssistBeam extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'AFAssistBeam';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'AF Assist Beam';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Emits',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Does not emit',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'IR AF assist beam only',
        ],
        3 => [
            'Id' => 0,
            'Label' => 'Emits',
        ],
        4 => [
            'Id' => 1,
            'Label' => 'Does not emit',
        ],
        5 => [
            'Id' => 2,
            'Label' => 'Only ext. flash emits',
        ],
        6 => [
            'Id' => 3,
            'Label' => 'IR AF assist beam only',
        ],
        7 => [
            'Id' => 0,
            'Label' => 'Emits',
        ],
        8 => [
            'Id' => 1,
            'Label' => 'Does not emit',
        ],
        9 => [
            'Id' => 2,
            'Label' => 'Only ext. flash emits',
        ],
        10 => [
            'Id' => 0,
            'Label' => 'Emits',
        ],
        11 => [
            'Id' => 1,
            'Label' => 'Does not emit',
        ],
        12 => [
            'Id' => 2,
            'Label' => 'Only ext. flash emits',
        ],
        13 => [
            'Id' => 0,
            'Label' => 'Emits',
        ],
        14 => [
            'Id' => 1,
            'Label' => 'Does not emit',
        ],
        15 => [
            'Id' => 2,
            'Label' => 'Only ext. flash emits',
        ],
        16 => [
            'Id' => 0,
            'Label' => 'Emits',
        ],
        17 => [
            'Id' => 1,
            'Label' => 'Does not emit',
        ],
        18 => [
            'Id' => 2,
            'Label' => 'Only ext. flash emits',
        ],
        19 => [
            'Id' => 0,
            'Label' => 'Emits',
        ],
        20 => [
            'Id' => 1,
            'Label' => 'Does not emit',
        ],
    ];

    protected $Index = 'mixed';

}
