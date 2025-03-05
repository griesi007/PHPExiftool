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
class SharpnessFrequency extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'SharpnessFrequency';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'mixed';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Sharpness Frequency';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'n/a',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Lowest',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Low',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Standard',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'High',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Highest',
        ],
    ];

}
