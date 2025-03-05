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
class AFAssist extends AbstractTag
{

    protected $Id = 5;

    protected $Name = 'AFAssist';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'mixed';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Emits/Fires',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Does not emit/Fires',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Only ext. flash emits/Fires',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Emits/Does not fire',
        ],
    ];

}
