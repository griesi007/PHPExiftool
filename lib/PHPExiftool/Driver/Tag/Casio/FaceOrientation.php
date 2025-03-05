<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FaceOrientation extends AbstractTag
{

    protected $Id = 8;

    protected $Name = 'FaceOrientation';

    protected $FullName = 'Casio::FaceInfo2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Face Orientation';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Horizontal (normal)',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Rotate 90 CW',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Rotate 270 CW',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Rotate 180',
        ],
    ];

}
