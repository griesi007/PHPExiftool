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
class USMLensElectronicMF extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'USMLensElectronicMF';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'USM Lens Electronic MF';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Turns on after one-shot AF',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Turns off after one-shot AF',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Always turned off',
        ],
        3 => [
            'Id' => 0,
            'Label' => 'Enable after one-shot AF',
        ],
        4 => [
            'Id' => 1,
            'Label' => 'Disable after one-shot AF',
        ],
        5 => [
            'Id' => 2,
            'Label' => 'Disable in AF mode',
        ],
    ];

}
