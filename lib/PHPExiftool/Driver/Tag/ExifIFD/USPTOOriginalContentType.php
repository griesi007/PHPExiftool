<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class USPTOOriginalContentType extends AbstractTag
{

    protected $Id = 50560;

    protected $Name = 'USPTOOriginalContentType';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'USPTO Original Content Type';

    protected $local_g1 = 'ExifIFD';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Text or Drawing',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Grayscale',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Color',
        ],
    ];

}
