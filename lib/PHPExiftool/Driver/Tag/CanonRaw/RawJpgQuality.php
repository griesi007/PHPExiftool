<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class RawJpgQuality extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'RawJpgQuality';

    protected $FullName = 'CanonRaw::RawJpgInfo';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Jpg Quality';

    protected $flag_Permanent = true;

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Economy',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Normal',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Fine',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Superfine',
        ],
    ];

}
