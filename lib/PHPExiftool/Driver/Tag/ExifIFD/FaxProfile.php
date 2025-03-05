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
class FaxProfile extends AbstractTag
{

    protected $Id = 402;

    protected $Name = 'FaxProfile';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Fax Profile';

    protected $local_g1 = 'ExifIFD';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Unknown',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Minimal B&W lossless, S',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Extended B&W lossless, F',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Lossless JBIG B&W, J',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Lossy color and grayscale, C',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Lossless color and grayscale, L',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Mixed raster content, M',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Profile T',
        ],
        255 => [
            'Id' => 255,
            'Label' => 'Multi Profiles',
        ],
    ];

}
