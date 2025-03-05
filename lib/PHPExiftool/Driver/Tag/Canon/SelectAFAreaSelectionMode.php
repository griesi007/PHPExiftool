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
class SelectAFAreaSelectionMode extends AbstractTag
{

    protected $Id = 12;

    protected $Name = 'SelectAFAreaSelectionMode';

    protected $FullName = 'Canon::AFConfig';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Select AF Area Selection Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Single-point AF',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Auto',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Zone AF',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'AF Point Expansion (4 point)',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Spot AF',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'AF Point Expansion (8 point)',
        ],
    ];

}
