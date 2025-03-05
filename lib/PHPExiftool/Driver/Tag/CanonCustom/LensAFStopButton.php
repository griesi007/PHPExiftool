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
class LensAFStopButton extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'LensAFStopButton';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Lens AF Stop Button';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'AF stop',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'AF start',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'AE lock while metering',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'AF point: M->Auto/Auto->ctr',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'One Shot <-> AI servo',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'IS start',
        ],
        6 => [
            'Id' => 0,
            'Label' => 'AF stop',
        ],
        7 => [
            'Id' => 1,
            'Label' => 'AF start',
        ],
        8 => [
            'Id' => 2,
            'Label' => 'AE lock while metering',
        ],
        9 => [
            'Id' => 3,
            'Label' => 'AF point: M -> Auto / Auto -> Ctr.',
        ],
        10 => [
            'Id' => 4,
            'Label' => 'AF mode: ONE SHOT <-> AI SERVO',
        ],
        11 => [
            'Id' => 5,
            'Label' => 'IS start',
        ],
        12 => [
            'Id' => 0,
            'Label' => 'AF stop',
        ],
        13 => [
            'Id' => 1,
            'Label' => 'AF start',
        ],
        14 => [
            'Id' => 2,
            'Label' => 'AE lock',
        ],
        15 => [
            'Id' => 3,
            'Label' => 'AF point: M->Auto/Auto->ctr',
        ],
        16 => [
            'Id' => 4,
            'Label' => 'One Shot <-> AI servo',
        ],
        17 => [
            'Id' => 5,
            'Label' => 'IS start',
        ],
        18 => [
            'Id' => 6,
            'Label' => 'Switch to registered AF point',
        ],
        19 => [
            'Id' => 7,
            'Label' => 'Spot AF',
        ],
        20 => [
            'Id' => 0,
            'Label' => 'AF stop',
        ],
        21 => [
            'Id' => 1,
            'Label' => 'AF start',
        ],
        22 => [
            'Id' => 2,
            'Label' => 'AE lock while metering',
        ],
        23 => [
            'Id' => 3,
            'Label' => 'AF point: M -> Auto / Auto -> Ctr.',
        ],
        24 => [
            'Id' => 4,
            'Label' => 'ONE SHOT <-> AI SERVO',
        ],
        25 => [
            'Id' => 5,
            'Label' => 'IS start',
        ],
        26 => [
            'Id' => 0,
            'Label' => 'AF stop',
        ],
        27 => [
            'Id' => 1,
            'Label' => 'AF start',
        ],
        28 => [
            'Id' => 2,
            'Label' => 'AE lock while metering',
        ],
        29 => [
            'Id' => 3,
            'Label' => 'AF point: M -> Auto / Auto -> Ctr.',
        ],
        30 => [
            'Id' => 4,
            'Label' => 'ONE SHOT <-> AI SERVO',
        ],
        31 => [
            'Id' => 5,
            'Label' => 'IS start',
        ],
        32 => [
            'Id' => 0,
            'Label' => 'AF stop',
        ],
        33 => [
            'Id' => 1,
            'Label' => 'AF start',
        ],
        34 => [
            'Id' => 2,
            'Label' => 'AE lock while metering',
        ],
        35 => [
            'Id' => 3,
            'Label' => 'AF point: M -> Auto / Auto -> Ctr.',
        ],
        36 => [
            'Id' => 4,
            'Label' => 'ONE SHOT <-> AI SERVO',
        ],
        37 => [
            'Id' => 5,
            'Label' => 'IS start',
        ],
        38 => [
            'Id' => 0,
            'Label' => 'AF Stop',
        ],
        39 => [
            'Id' => 1,
            'Label' => 'Operate AF',
        ],
        40 => [
            'Id' => 2,
            'Label' => 'Lock AE and start timer',
        ],
    ];

}
