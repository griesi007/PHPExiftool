<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CompressionType extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'CompressionType';

    protected $FullName = 'AIFF::Common';

    protected $GroupName = 'AIFF';

    protected $g0 = 'AIFF';

    protected $g1 = 'AIFF';

    protected $g2 = 'Audio';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Compression Type';

    protected $MaxLength = 4;

    protected $Values = [
        'ACE2' => [
            'Id' => 'ACE2',
            'Label' => 'ACE 2-to-1',
        ],
        'ACE8' => [
            'Id' => 'ACE8',
            'Label' => 'ACE 8-to-3',
        ],
        'ALAW' => [
            'Id' => 'ALAW',
            'Label' => 'A-law',
        ],
        'G722' => [
            'Id' => 'G722',
            'Label' => 'G722',
        ],
        'G726' => [
            'Id' => 'G726',
            'Label' => 'G726',
        ],
        'G728' => [
            'Id' => 'G728',
            'Label' => 'G728',
        ],
        'GSM ' => [
            'Id' => 'GSM ',
            'Label' => 'GSM',
        ],
        'MAC3' => [
            'Id' => 'MAC3',
            'Label' => 'MAC 3-to-1',
        ],
        'MAC6' => [
            'Id' => 'MAC6',
            'Label' => 'MAC 6-to-1',
        ],
        'NONE' => [
            'Id' => 'NONE',
            'Label' => 'None',
        ],
        'ULAW' => [
            'Id' => 'ULAW',
            'Label' => 'Mu-law',
        ],
        'alaw' => [
            'Id' => 'alaw',
            'Label' => 'a-law',
        ],
        'sowt' => [
            'Id' => 'sowt',
            'Label' => 'Little-endian, no compression',
        ],
        'ulaw' => [
            'Id' => 'ulaw',
            'Label' => 'mu-law',
        ],
    ];

}
