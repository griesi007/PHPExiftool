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
class ImageType extends AbstractTag
{

    protected $Id = 48132;

    protected $Name = 'ImageType';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Image Type';

    protected $local_g1 = 'ExifIFD';

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Preview',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Page',
        ],
    ];

}
