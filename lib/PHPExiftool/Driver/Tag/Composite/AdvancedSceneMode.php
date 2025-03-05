<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AdvancedSceneMode extends AbstractTag
{

    protected $Id = 'Panasonic::AdvancedSceneMode';

    protected $Name = 'AdvancedSceneMode';

    protected $FullName = 'Composite';

    protected $GroupName = 'Composite';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Advanced Scene Mode';

    protected $local_g2 = 'Camera';

    protected $Values = [
        '0 1' => [
            'Id' => '0 1',
            'Label' => 'Off',
        ],
        '2 2' => [
            'Id' => '2 2',
            'Label' => 'Outdoor Portrait',
        ],
        '2 3' => [
            'Id' => '2 3',
            'Label' => 'Indoor Portrait',
        ],
        '2 4' => [
            'Id' => '2 4',
            'Label' => 'Creative Portrait',
        ],
        '3 2' => [
            'Id' => '3 2',
            'Label' => 'Nature',
        ],
        '3 3' => [
            'Id' => '3 3',
            'Label' => 'Architecture',
        ],
        '3 4' => [
            'Id' => '3 4',
            'Label' => 'Creative Scenery',
        ],
        '4 2' => [
            'Id' => '4 2',
            'Label' => 'Outdoor Sports',
        ],
        '4 3' => [
            'Id' => '4 3',
            'Label' => 'Indoor Sports',
        ],
        '4 4' => [
            'Id' => '4 4',
            'Label' => 'Creative Sports',
        ],
        '9 2' => [
            'Id' => '9 2',
            'Label' => 'Flower',
        ],
        '9 3' => [
            'Id' => '9 3',
            'Label' => 'Objects',
        ],
        '9 4' => [
            'Id' => '9 4',
            'Label' => 'Creative Macro',
        ],
        '21 2' => [
            'Id' => '21 2',
            'Label' => 'Illuminations',
        ],
        '21 4' => [
            'Id' => '21 4',
            'Label' => 'Creative Night Scenery',
        ],
        '45 2' => [
            'Id' => '45 2',
            'Label' => 'Cinema',
        ],
        '45 7' => [
            'Id' => '45 7',
            'Label' => 'Expressive',
        ],
        '45 8' => [
            'Id' => '45 8',
            'Label' => 'Retro',
        ],
        '45 9' => [
            'Id' => '45 9',
            'Label' => 'Pure',
        ],
        '45 10' => [
            'Id' => '45 10',
            'Label' => 'Elegant',
        ],
        '45 12' => [
            'Id' => '45 12',
            'Label' => 'Monochrome',
        ],
        '45 13' => [
            'Id' => '45 13',
            'Label' => 'Dynamic Art',
        ],
        '45 14' => [
            'Id' => '45 14',
            'Label' => 'Silhouette',
        ],
        '51 2' => [
            'Id' => '51 2',
            'Label' => 'HDR Art',
        ],
        '51 3' => [
            'Id' => '51 3',
            'Label' => 'HDR B&W',
        ],
        '59 1' => [
            'Id' => '59 1',
            'Label' => 'Expressive',
        ],
        '59 2' => [
            'Id' => '59 2',
            'Label' => 'Retro',
        ],
        '59 3' => [
            'Id' => '59 3',
            'Label' => 'High Key',
        ],
        '59 4' => [
            'Id' => '59 4',
            'Label' => 'Sepia',
        ],
        '59 5' => [
            'Id' => '59 5',
            'Label' => 'High Dynamic',
        ],
        '59 6' => [
            'Id' => '59 6',
            'Label' => 'Miniature',
        ],
        '59 9' => [
            'Id' => '59 9',
            'Label' => 'Low Key',
        ],
        '59 10' => [
            'Id' => '59 10',
            'Label' => 'Toy Effect',
        ],
        '59 11' => [
            'Id' => '59 11',
            'Label' => 'Dynamic Monochrome',
        ],
        '59 12' => [
            'Id' => '59 12',
            'Label' => 'Soft',
        ],
        '66 1' => [
            'Id' => '66 1',
            'Label' => 'Impressive Art',
        ],
        '66 2' => [
            'Id' => '66 2',
            'Label' => 'Cross Process',
        ],
        '66 3' => [
            'Id' => '66 3',
            'Label' => 'Color Select',
        ],
        '66 4' => [
            'Id' => '66 4',
            'Label' => 'Star',
        ],
        '90 3' => [
            'Id' => '90 3',
            'Label' => 'Old Days',
        ],
        '90 4' => [
            'Id' => '90 4',
            'Label' => 'Sunshine',
        ],
        '90 5' => [
            'Id' => '90 5',
            'Label' => 'Bleach Bypass',
        ],
        '90 6' => [
            'Id' => '90 6',
            'Label' => 'Toy Pop',
        ],
        '90 7' => [
            'Id' => '90 7',
            'Label' => 'Fantasy',
        ],
        '90 8' => [
            'Id' => '90 8',
            'Label' => 'Monochrome',
        ],
        '90 9' => [
            'Id' => '90 9',
            'Label' => 'Rough Monochrome',
        ],
        '90 10' => [
            'Id' => '90 10',
            'Label' => 'Silky Monochrome',
        ],
        '92 1' => [
            'Id' => '92 1',
            'Label' => 'Handheld Night Shot',
        ],
        'DMC-TZ40 90 1' => [
            'Id' => 'DMC-TZ40 90 1',
            'Label' => 'Expressive',
        ],
        'DMC-TZ40 90 2' => [
            'Id' => 'DMC-TZ40 90 2',
            'Label' => 'Retro',
        ],
        'DMC-TZ40 90 3' => [
            'Id' => 'DMC-TZ40 90 3',
            'Label' => 'High Key',
        ],
        'DMC-TZ40 90 4' => [
            'Id' => 'DMC-TZ40 90 4',
            'Label' => 'Sepia',
        ],
        'DMC-TZ40 90 5' => [
            'Id' => 'DMC-TZ40 90 5',
            'Label' => 'High Dynamic',
        ],
        'DMC-TZ40 90 6' => [
            'Id' => 'DMC-TZ40 90 6',
            'Label' => 'Miniature',
        ],
        'DMC-TZ40 90 9' => [
            'Id' => 'DMC-TZ40 90 9',
            'Label' => 'Low Key',
        ],
        'DMC-TZ40 90 10' => [
            'Id' => 'DMC-TZ40 90 10',
            'Label' => 'Toy Effect',
        ],
        'DMC-TZ40 90 11' => [
            'Id' => 'DMC-TZ40 90 11',
            'Label' => 'Dynamic Monochrome',
        ],
        'DMC-TZ40 90 12' => [
            'Id' => 'DMC-TZ40 90 12',
            'Label' => 'Soft',
        ],
    ];

}
