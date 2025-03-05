<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DjVu;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SubfileType extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'SubfileType';

    protected $FullName = 'DjVu::Form';

    protected $GroupName = 'DjVu';

    protected $g0 = 'DjVu';

    protected $g1 = 'DjVu';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Subfile Type';

    protected $MaxLength = 4;

    protected $Values = [
        'BM44' => [
            'Id' => 'BM44',
            'Label' => 'Grayscale IW44',
        ],
        'DJVI' => [
            'Id' => 'DJVI',
            'Label' => 'Shared component',
        ],
        'DJVM' => [
            'Id' => 'DJVM',
            'Label' => 'Multi-page document',
        ],
        'DJVU' => [
            'Id' => 'DJVU',
            'Label' => 'Single-page image',
        ],
        'PM44' => [
            'Id' => 'PM44',
            'Label' => 'Color IW44',
        ],
        'THUM' => [
            'Id' => 'THUM',
            'Label' => 'Thumbnail image',
        ],
    ];

}
