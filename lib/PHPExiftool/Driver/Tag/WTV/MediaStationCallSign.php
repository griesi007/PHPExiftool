<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\WTV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MediaStationCallSign extends AbstractTag
{

    protected $Id = 'WM/MediaStationCallSign';

    protected $Name = 'MediaStationCallSign';

    protected $FullName = 'WTV::Metadata';

    protected $GroupName = 'WTV';

    protected $g0 = 'WTV';

    protected $g1 = 'WTV';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Media Station Call Sign';

}