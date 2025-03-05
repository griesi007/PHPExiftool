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
class AFPointSpotMetering extends AbstractTag
{

    protected $Id = 13;

    protected $Name = 'AFPointSpotMetering';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'No. AF Points/Spot Metering';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => '45/Center AF point',
        ],
        1 => [
            'Id' => 1,
            'Label' => '11/Active AF point',
        ],
        2 => [
            'Id' => 2,
            'Label' => '11/Center AF point',
        ],
        3 => [
            'Id' => 3,
            'Label' => '9/Active AF point',
        ],
    ];

}
