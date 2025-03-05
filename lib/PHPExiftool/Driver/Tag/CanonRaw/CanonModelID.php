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
class CanonModelID extends AbstractTag
{

    protected $Id = 6196;

    protected $Name = 'CanonModelID';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Canon Model ID';

    protected $flag_Permanent = true;

    protected $Values = [
        1042 => [
            'Id' => 1042,
            'Label' => 'EOS M50 / Kiss M',
        ],
        2049 => [
            'Id' => 2049,
            'Label' => 'PowerShot SX740 HS',
        ],
        2052 => [
            'Id' => 2052,
            'Label' => 'PowerShot G5 X Mark II',
        ],
        2053 => [
            'Id' => 2053,
            'Label' => 'PowerShot SX70 HS',
        ],
        2056 => [
            'Id' => 2056,
            'Label' => 'PowerShot G7 X Mark III',
        ],
        2065 => [
            'Id' => 2065,
            'Label' => 'EOS M6 Mark II',
        ],
        2066 => [
            'Id' => 2066,
            'Label' => 'EOS M200',
        ],
        16842752 => [
            'Id' => 16842752,
            'Label' => 'PowerShot A30',
        ],
        17039360 => [
            'Id' => 17039360,
            'Label' => 'PowerShot S300 / Digital IXUS 300 / IXY Digital 300',
        ],
        17170432 => [
            'Id' => 17170432,
            'Label' => 'PowerShot A20',
        ],
        17301504 => [
            'Id' => 17301504,
            'Label' => 'PowerShot A10',
        ],
        17367040 => [
            'Id' => 17367040,
            'Label' => 'PowerShot S110 / Digital IXUS v / IXY Digital 200',
        ],
        17825792 => [
            'Id' => 17825792,
            'Label' => 'PowerShot G2',
        ],
        17891328 => [
            'Id' => 17891328,
            'Label' => 'PowerShot S40',
        ],
        17956864 => [
            'Id' => 17956864,
            'Label' => 'PowerShot S30',
        ],
        18022400 => [
            'Id' => 18022400,
            'Label' => 'PowerShot A40',
        ],
        18087936 => [
            'Id' => 18087936,
            'Label' => 'EOS D30',
        ],
        18153472 => [
            'Id' => 18153472,
            'Label' => 'PowerShot A100',
        ],
        18219008 => [
            'Id' => 18219008,
            'Label' => 'PowerShot S200 / Digital IXUS v2 / IXY Digital 200a',
        ],
        18284544 => [
            'Id' => 18284544,
            'Label' => 'PowerShot A200',
        ],
        18350080 => [
            'Id' => 18350080,
            'Label' => 'PowerShot S330 / Digital IXUS 330 / IXY Digital 300a',
        ],
        18415616 => [
            'Id' => 18415616,
            'Label' => 'PowerShot G3',
        ],
        18939904 => [
            'Id' => 18939904,
            'Label' => 'PowerShot S45',
        ],
        19070976 => [
            'Id' => 19070976,
            'Label' => 'PowerShot SD100 / Digital IXUS II / IXY Digital 30',
        ],
        19136512 => [
            'Id' => 19136512,
            'Label' => 'PowerShot S230 / Digital IXUS v3 / IXY Digital 320',
        ],
        19202048 => [
            'Id' => 19202048,
            'Label' => 'PowerShot A70',
        ],
        19267584 => [
            'Id' => 19267584,
            'Label' => 'PowerShot A60',
        ],
        19333120 => [
            'Id' => 19333120,
            'Label' => 'PowerShot S400 / Digital IXUS 400 / IXY Digital 400',
        ],
        19464192 => [
            'Id' => 19464192,
            'Label' => 'PowerShot G5',
        ],
        19922944 => [
            'Id' => 19922944,
            'Label' => 'PowerShot A300',
        ],
        19988480 => [
            'Id' => 19988480,
            'Label' => 'PowerShot S50',
        ],
        20185088 => [
            'Id' => 20185088,
            'Label' => 'PowerShot A80',
        ],
        20250624 => [
            'Id' => 20250624,
            'Label' => 'PowerShot SD10 / Digital IXUS i / IXY Digital L',
        ],
        20316160 => [
            'Id' => 20316160,
            'Label' => 'PowerShot S1 IS',
        ],
        20381696 => [
            'Id' => 20381696,
            'Label' => 'PowerShot Pro1',
        ],
        20447232 => [
            'Id' => 20447232,
            'Label' => 'PowerShot S70',
        ],
        20512768 => [
            'Id' => 20512768,
            'Label' => 'PowerShot S60',
        ],
        20971520 => [
            'Id' => 20971520,
            'Label' => 'PowerShot G6',
        ],
        21037056 => [
            'Id' => 21037056,
            'Label' => 'PowerShot S500 / Digital IXUS 500 / IXY Digital 500',
        ],
        21102592 => [
            'Id' => 21102592,
            'Label' => 'PowerShot A75',
        ],
        21233664 => [
            'Id' => 21233664,
            'Label' => 'PowerShot SD110 / Digital IXUS IIs / IXY Digital 30a',
        ],
        21299200 => [
            'Id' => 21299200,
            'Label' => 'PowerShot A400',
        ],
        21430272 => [
            'Id' => 21430272,
            'Label' => 'PowerShot A310',
        ],
        21561344 => [
            'Id' => 21561344,
            'Label' => 'PowerShot A85',
        ],
        22151168 => [
            'Id' => 22151168,
            'Label' => 'PowerShot S410 / Digital IXUS 430 / IXY Digital 450',
        ],
        22216704 => [
            'Id' => 22216704,
            'Label' => 'PowerShot A95',
        ],
        22282240 => [
            'Id' => 22282240,
            'Label' => 'PowerShot SD300 / Digital IXUS 40 / IXY Digital 50',
        ],
        22347776 => [
            'Id' => 22347776,
            'Label' => 'PowerShot SD200 / Digital IXUS 30 / IXY Digital 40',
        ],
        22413312 => [
            'Id' => 22413312,
            'Label' => 'PowerShot A520',
        ],
        22478848 => [
            'Id' => 22478848,
            'Label' => 'PowerShot A510',
        ],
        22609920 => [
            'Id' => 22609920,
            'Label' => 'PowerShot SD20 / Digital IXUS i5 / IXY Digital L2',
        ],
        23330816 => [
            'Id' => 23330816,
            'Label' => 'PowerShot S2 IS',
        ],
        23396352 => [
            'Id' => 23396352,
            'Label' => 'PowerShot SD430 / Digital IXUS Wireless / IXY Digital Wireless',
        ],
        23461888 => [
            'Id' => 23461888,
            'Label' => 'PowerShot SD500 / Digital IXUS 700 / IXY Digital 600',
        ],
        23494656 => [
            'Id' => 23494656,
            'Label' => 'EOS D60',
        ],
        24117248 => [
            'Id' => 24117248,
            'Label' => 'PowerShot SD30 / Digital IXUS i Zoom / IXY Digital L3',
        ],
        24379392 => [
            'Id' => 24379392,
            'Label' => 'PowerShot A430',
        ],
        24444928 => [
            'Id' => 24444928,
            'Label' => 'PowerShot A410',
        ],
        24510464 => [
            'Id' => 24510464,
            'Label' => 'PowerShot S80',
        ],
        24641536 => [
            'Id' => 24641536,
            'Label' => 'PowerShot A620',
        ],
        24707072 => [
            'Id' => 24707072,
            'Label' => 'PowerShot A610',
        ],
        25165824 => [
            'Id' => 25165824,
            'Label' => 'PowerShot SD630 / Digital IXUS 65 / IXY Digital 80',
        ],
        25231360 => [
            'Id' => 25231360,
            'Label' => 'PowerShot SD450 / Digital IXUS 55 / IXY Digital 60',
        ],
        25296896 => [
            'Id' => 25296896,
            'Label' => 'PowerShot TX1',
        ],
        25624576 => [
            'Id' => 25624576,
            'Label' => 'PowerShot SD400 / Digital IXUS 50 / IXY Digital 55',
        ],
        25690112 => [
            'Id' => 25690112,
            'Label' => 'PowerShot A420',
        ],
        25755648 => [
            'Id' => 25755648,
            'Label' => 'PowerShot SD900 / Digital IXUS 900 Ti / IXY Digital 1000',
        ],
        26214400 => [
            'Id' => 26214400,
            'Label' => 'PowerShot SD550 / Digital IXUS 750 / IXY Digital 700',
        ],
        26345472 => [
            'Id' => 26345472,
            'Label' => 'PowerShot A700',
        ],
        26476544 => [
            'Id' => 26476544,
            'Label' => 'PowerShot SD700 IS / Digital IXUS 800 IS / IXY Digital 800 IS',
        ],
        26542080 => [
            'Id' => 26542080,
            'Label' => 'PowerShot S3 IS',
        ],
        26607616 => [
            'Id' => 26607616,
            'Label' => 'PowerShot A540',
        ],
        26673152 => [
            'Id' => 26673152,
            'Label' => 'PowerShot SD600 / Digital IXUS 60 / IXY Digital 70',
        ],
        26738688 => [
            'Id' => 26738688,
            'Label' => 'PowerShot G7',
        ],
        26804224 => [
            'Id' => 26804224,
            'Label' => 'PowerShot A530',
        ],
        33554432 => [
            'Id' => 33554432,
            'Label' => 'PowerShot SD800 IS / Digital IXUS 850 IS / IXY Digital 900 IS',
        ],
        33619968 => [
            'Id' => 33619968,
            'Label' => 'PowerShot SD40 / Digital IXUS i7 / IXY Digital L4',
        ],
        33685504 => [
            'Id' => 33685504,
            'Label' => 'PowerShot A710 IS',
        ],
        33751040 => [
            'Id' => 33751040,
            'Label' => 'PowerShot A640',
        ],
        33816576 => [
            'Id' => 33816576,
            'Label' => 'PowerShot A630',
        ],
        34144256 => [
            'Id' => 34144256,
            'Label' => 'PowerShot S5 IS',
        ],
        34603008 => [
            'Id' => 34603008,
            'Label' => 'PowerShot A460',
        ],
        34734080 => [
            'Id' => 34734080,
            'Label' => 'PowerShot SD850 IS / Digital IXUS 950 IS / IXY Digital 810 IS',
        ],
        34799616 => [
            'Id' => 34799616,
            'Label' => 'PowerShot A570 IS',
        ],
        34865152 => [
            'Id' => 34865152,
            'Label' => 'PowerShot A560',
        ],
        34930688 => [
            'Id' => 34930688,
            'Label' => 'PowerShot SD750 / Digital IXUS 75 / IXY Digital 90',
        ],
        34996224 => [
            'Id' => 34996224,
            'Label' => 'PowerShot SD1000 / Digital IXUS 70 / IXY Digital 10',
        ],
        35127296 => [
            'Id' => 35127296,
            'Label' => 'PowerShot A550',
        ],
        35192832 => [
            'Id' => 35192832,
            'Label' => 'PowerShot A450',
        ],
        35848192 => [
            'Id' => 35848192,
            'Label' => 'PowerShot G9',
        ],
        35913728 => [
            'Id' => 35913728,
            'Label' => 'PowerShot A650 IS',
        ],
        36044800 => [
            'Id' => 36044800,
            'Label' => 'PowerShot A720 IS',
        ],
        36241408 => [
            'Id' => 36241408,
            'Label' => 'PowerShot SX100 IS',
        ],
        36700160 => [
            'Id' => 36700160,
            'Label' => 'PowerShot SD950 IS / Digital IXUS 960 IS / IXY Digital 2000 IS',
        ],
        36765696 => [
            'Id' => 36765696,
            'Label' => 'PowerShot SD870 IS / Digital IXUS 860 IS / IXY Digital 910 IS',
        ],
        36831232 => [
            'Id' => 36831232,
            'Label' => 'PowerShot SD890 IS / Digital IXUS 970 IS / IXY Digital 820 IS',
        ],
        37093376 => [
            'Id' => 37093376,
            'Label' => 'PowerShot SD790 IS / Digital IXUS 90 IS / IXY Digital 95 IS',
        ],
        37158912 => [
            'Id' => 37158912,
            'Label' => 'PowerShot SD770 IS / Digital IXUS 85 IS / IXY Digital 25 IS',
        ],
        37224448 => [
            'Id' => 37224448,
            'Label' => 'PowerShot A590 IS',
        ],
        37289984 => [
            'Id' => 37289984,
            'Label' => 'PowerShot A580',
        ],
        37879808 => [
            'Id' => 37879808,
            'Label' => 'PowerShot A470',
        ],
        37945344 => [
            'Id' => 37945344,
            'Label' => 'PowerShot SD1100 IS / Digital IXUS 80 IS / IXY Digital 20 IS',
        ],
        38141952 => [
            'Id' => 38141952,
            'Label' => 'PowerShot SX1 IS',
        ],
        38207488 => [
            'Id' => 38207488,
            'Label' => 'PowerShot SX10 IS',
        ],
        38273024 => [
            'Id' => 38273024,
            'Label' => 'PowerShot A1000 IS',
        ],
        38338560 => [
            'Id' => 38338560,
            'Label' => 'PowerShot G10',
        ],
        38862848 => [
            'Id' => 38862848,
            'Label' => 'PowerShot A2000 IS',
        ],
        38928384 => [
            'Id' => 38928384,
            'Label' => 'PowerShot SX110 IS',
        ],
        38993920 => [
            'Id' => 38993920,
            'Label' => 'PowerShot SD990 IS / Digital IXUS 980 IS / IXY Digital 3000 IS',
        ],
        39059456 => [
            'Id' => 39059456,
            'Label' => 'PowerShot SD880 IS / Digital IXUS 870 IS / IXY Digital 920 IS',
        ],
        39124992 => [
            'Id' => 39124992,
            'Label' => 'PowerShot E1',
        ],
        39190528 => [
            'Id' => 39190528,
            'Label' => 'PowerShot D10',
        ],
        39256064 => [
            'Id' => 39256064,
            'Label' => 'PowerShot SD960 IS / Digital IXUS 110 IS / IXY Digital 510 IS',
        ],
        39321600 => [
            'Id' => 39321600,
            'Label' => 'PowerShot A2100 IS',
        ],
        39387136 => [
            'Id' => 39387136,
            'Label' => 'PowerShot A480',
        ],
        39845888 => [
            'Id' => 39845888,
            'Label' => 'PowerShot SX200 IS',
        ],
        39911424 => [
            'Id' => 39911424,
            'Label' => 'PowerShot SD970 IS / Digital IXUS 990 IS / IXY Digital 830 IS',
        ],
        39976960 => [
            'Id' => 39976960,
            'Label' => 'PowerShot SD780 IS / Digital IXUS 100 IS / IXY Digital 210 IS',
        ],
        40042496 => [
            'Id' => 40042496,
            'Label' => 'PowerShot A1100 IS',
        ],
        40108032 => [
            'Id' => 40108032,
            'Label' => 'PowerShot SD1200 IS / Digital IXUS 95 IS / IXY Digital 110 IS',
        ],
        40894464 => [
            'Id' => 40894464,
            'Label' => 'PowerShot G11',
        ],
        40960000 => [
            'Id' => 40960000,
            'Label' => 'PowerShot SX120 IS',
        ],
        41025536 => [
            'Id' => 41025536,
            'Label' => 'PowerShot S90',
        ],
        41222144 => [
            'Id' => 41222144,
            'Label' => 'PowerShot SX20 IS',
        ],
        41287680 => [
            'Id' => 41287680,
            'Label' => 'PowerShot SD980 IS / Digital IXUS 200 IS / IXY Digital 930 IS',
        ],
        41353216 => [
            'Id' => 41353216,
            'Label' => 'PowerShot SD940 IS / Digital IXUS 120 IS / IXY Digital 220 IS',
        ],
        41943040 => [
            'Id' => 41943040,
            'Label' => 'PowerShot A495',
        ],
        42008576 => [
            'Id' => 42008576,
            'Label' => 'PowerShot A490',
        ],
        42074112 => [
            'Id' => 42074112,
            'Label' => 'PowerShot A3100/A3150 IS',
        ],
        42139648 => [
            'Id' => 42139648,
            'Label' => 'PowerShot A3000 IS',
        ],
        42205184 => [
            'Id' => 42205184,
            'Label' => 'PowerShot SD1400 IS / IXUS 130 / IXY 400F',
        ],
        42270720 => [
            'Id' => 42270720,
            'Label' => 'PowerShot SD1300 IS / IXUS 105 / IXY 200F',
        ],
        42336256 => [
            'Id' => 42336256,
            'Label' => 'PowerShot SD3500 IS / IXUS 210 / IXY 10S',
        ],
        42401792 => [
            'Id' => 42401792,
            'Label' => 'PowerShot SX210 IS',
        ],
        42467328 => [
            'Id' => 42467328,
            'Label' => 'PowerShot SD4000 IS / IXUS 300 HS / IXY 30S',
        ],
        42532864 => [
            'Id' => 42532864,
            'Label' => 'PowerShot SD4500 IS / IXUS 1000 HS / IXY 50S',
        ],
        43122688 => [
            'Id' => 43122688,
            'Label' => 'PowerShot G12',
        ],
        43188224 => [
            'Id' => 43188224,
            'Label' => 'PowerShot SX30 IS',
        ],
        43253760 => [
            'Id' => 43253760,
            'Label' => 'PowerShot SX130 IS',
        ],
        43319296 => [
            'Id' => 43319296,
            'Label' => 'PowerShot S95',
        ],
        43515904 => [
            'Id' => 43515904,
            'Label' => 'PowerShot A3300 IS',
        ],
        43581440 => [
            'Id' => 43581440,
            'Label' => 'PowerShot A3200 IS',
        ],
        50331648 => [
            'Id' => 50331648,
            'Label' => 'PowerShot ELPH 500 HS / IXUS 310 HS / IXY 31S',
        ],
        50397184 => [
            'Id' => 50397184,
            'Label' => 'PowerShot Pro90 IS',
        ],
        50397185 => [
            'Id' => 50397185,
            'Label' => 'PowerShot A800',
        ],
        50462720 => [
            'Id' => 50462720,
            'Label' => 'PowerShot ELPH 100 HS / IXUS 115 HS / IXY 210F',
        ],
        50528256 => [
            'Id' => 50528256,
            'Label' => 'PowerShot SX230 HS',
        ],
        50593792 => [
            'Id' => 50593792,
            'Label' => 'PowerShot ELPH 300 HS / IXUS 220 HS / IXY 410F',
        ],
        50659328 => [
            'Id' => 50659328,
            'Label' => 'PowerShot A2200',
        ],
        50724864 => [
            'Id' => 50724864,
            'Label' => 'PowerShot A1200',
        ],
        50790400 => [
            'Id' => 50790400,
            'Label' => 'PowerShot SX220 HS',
        ],
        50855936 => [
            'Id' => 50855936,
            'Label' => 'PowerShot G1 X',
        ],
        50921472 => [
            'Id' => 50921472,
            'Label' => 'PowerShot SX150 IS',
        ],
        51380224 => [
            'Id' => 51380224,
            'Label' => 'PowerShot ELPH 510 HS / IXUS 1100 HS / IXY 51S',
        ],
        51445760 => [
            'Id' => 51445760,
            'Label' => 'PowerShot S100 (new)',
        ],
        51511296 => [
            'Id' => 51511296,
            'Label' => 'PowerShot ELPH 310 HS / IXUS 230 HS / IXY 600F',
        ],
        51576832 => [
            'Id' => 51576832,
            'Label' => 'PowerShot SX40 HS',
        ],
        51642368 => [
            'Id' => 51642368,
            'Label' => 'IXY 32S',
        ],
        51773440 => [
            'Id' => 51773440,
            'Label' => 'PowerShot A1300',
        ],
        51838976 => [
            'Id' => 51838976,
            'Label' => 'PowerShot A810',
        ],
        51904512 => [
            'Id' => 51904512,
            'Label' => 'PowerShot ELPH 320 HS / IXUS 240 HS / IXY 420F',
        ],
        51970048 => [
            'Id' => 51970048,
            'Label' => 'PowerShot ELPH 110 HS / IXUS 125 HS / IXY 220F',
        ],
        52428800 => [
            'Id' => 52428800,
            'Label' => 'PowerShot D20',
        ],
        52494336 => [
            'Id' => 52494336,
            'Label' => 'PowerShot A4000 IS',
        ],
        52559872 => [
            'Id' => 52559872,
            'Label' => 'PowerShot SX260 HS',
        ],
        52625408 => [
            'Id' => 52625408,
            'Label' => 'PowerShot SX240 HS',
        ],
        52690944 => [
            'Id' => 52690944,
            'Label' => 'PowerShot ELPH 530 HS / IXUS 510 HS / IXY 1',
        ],
        52756480 => [
            'Id' => 52756480,
            'Label' => 'PowerShot ELPH 520 HS / IXUS 500 HS / IXY 3',
        ],
        52822016 => [
            'Id' => 52822016,
            'Label' => 'PowerShot A3400 IS',
        ],
        52887552 => [
            'Id' => 52887552,
            'Label' => 'PowerShot A2400 IS',
        ],
        52953088 => [
            'Id' => 52953088,
            'Label' => 'PowerShot A2300',
        ],
        53608448 => [
            'Id' => 53608448,
            'Label' => 'PowerShot S100V',
        ],
        53673984 => [
            'Id' => 53673984,
            'Label' => 'PowerShot G15',
        ],
        53739520 => [
            'Id' => 53739520,
            'Label' => 'PowerShot SX50 HS',
        ],
        53805056 => [
            'Id' => 53805056,
            'Label' => 'PowerShot SX160 IS',
        ],
        53870592 => [
            'Id' => 53870592,
            'Label' => 'PowerShot S110 (new)',
        ],
        53936128 => [
            'Id' => 53936128,
            'Label' => 'PowerShot SX500 IS',
        ],
        54001664 => [
            'Id' => 54001664,
            'Label' => 'PowerShot N',
        ],
        54067200 => [
            'Id' => 54067200,
            'Label' => 'IXUS 245 HS / IXY 430F',
        ],
        54525952 => [
            'Id' => 54525952,
            'Label' => 'PowerShot SX280 HS',
        ],
        54591488 => [
            'Id' => 54591488,
            'Label' => 'PowerShot SX270 HS',
        ],
        54657024 => [
            'Id' => 54657024,
            'Label' => 'PowerShot A3500 IS',
        ],
        54722560 => [
            'Id' => 54722560,
            'Label' => 'PowerShot A2600',
        ],
        54788096 => [
            'Id' => 54788096,
            'Label' => 'PowerShot SX275 HS',
        ],
        54853632 => [
            'Id' => 54853632,
            'Label' => 'PowerShot A1400',
        ],
        54919168 => [
            'Id' => 54919168,
            'Label' => 'PowerShot ELPH 130 IS / IXUS 140 / IXY 110F',
        ],
        54984704 => [
            'Id' => 54984704,
            'Label' => 'PowerShot ELPH 115/120 IS / IXUS 132/135 / IXY 90F/100F',
        ],
        55115776 => [
            'Id' => 55115776,
            'Label' => 'PowerShot ELPH 330 HS / IXUS 255 HS / IXY 610F',
        ],
        55640064 => [
            'Id' => 55640064,
            'Label' => 'PowerShot A2500',
        ],
        55836672 => [
            'Id' => 55836672,
            'Label' => 'PowerShot G16',
        ],
        55902208 => [
            'Id' => 55902208,
            'Label' => 'PowerShot S120',
        ],
        55967744 => [
            'Id' => 55967744,
            'Label' => 'PowerShot SX170 IS',
        ],
        56098816 => [
            'Id' => 56098816,
            'Label' => 'PowerShot SX510 HS',
        ],
        56164352 => [
            'Id' => 56164352,
            'Label' => 'PowerShot S200 (new)',
        ],
        56623104 => [
            'Id' => 56623104,
            'Label' => 'IXY 620F',
        ],
        56688640 => [
            'Id' => 56688640,
            'Label' => 'PowerShot N100',
        ],
        56885248 => [
            'Id' => 56885248,
            'Label' => 'PowerShot G1 X Mark II',
        ],
        56950784 => [
            'Id' => 56950784,
            'Label' => 'PowerShot D30',
        ],
        57016320 => [
            'Id' => 57016320,
            'Label' => 'PowerShot SX700 HS',
        ],
        57081856 => [
            'Id' => 57081856,
            'Label' => 'PowerShot SX600 HS',
        ],
        57147392 => [
            'Id' => 57147392,
            'Label' => 'PowerShot ELPH 140 IS / IXUS 150 / IXY 130',
        ],
        57212928 => [
            'Id' => 57212928,
            'Label' => 'PowerShot ELPH 135 / IXUS 145 / IXY 120',
        ],
        57671680 => [
            'Id' => 57671680,
            'Label' => 'PowerShot ELPH 340 HS / IXUS 265 HS / IXY 630',
        ],
        57737216 => [
            'Id' => 57737216,
            'Label' => 'PowerShot ELPH 150 IS / IXUS 155 / IXY 140',
        ],
        57933824 => [
            'Id' => 57933824,
            'Label' => 'EOS M3',
        ],
        57999360 => [
            'Id' => 57999360,
            'Label' => 'PowerShot SX60 HS',
        ],
        58064896 => [
            'Id' => 58064896,
            'Label' => 'PowerShot SX520 HS',
        ],
        58130432 => [
            'Id' => 58130432,
            'Label' => 'PowerShot SX400 IS',
        ],
        58195968 => [
            'Id' => 58195968,
            'Label' => 'PowerShot G7 X',
        ],
        58261504 => [
            'Id' => 58261504,
            'Label' => 'PowerShot N2',
        ],
        58720256 => [
            'Id' => 58720256,
            'Label' => 'PowerShot SX530 HS',
        ],
        58851328 => [
            'Id' => 58851328,
            'Label' => 'PowerShot SX710 HS',
        ],
        58916864 => [
            'Id' => 58916864,
            'Label' => 'PowerShot SX610 HS',
        ],
        58982400 => [
            'Id' => 58982400,
            'Label' => 'EOS M10',
        ],
        59047936 => [
            'Id' => 59047936,
            'Label' => 'PowerShot G3 X',
        ],
        59113472 => [
            'Id' => 59113472,
            'Label' => 'PowerShot ELPH 165 HS / IXUS 165 / IXY 160',
        ],
        59179008 => [
            'Id' => 59179008,
            'Label' => 'PowerShot ELPH 160 / IXUS 160',
        ],
        59244544 => [
            'Id' => 59244544,
            'Label' => 'PowerShot ELPH 350 HS / IXUS 275 HS / IXY 640',
        ],
        59310080 => [
            'Id' => 59310080,
            'Label' => 'PowerShot ELPH 170 IS / IXUS 170',
        ],
        59834368 => [
            'Id' => 59834368,
            'Label' => 'PowerShot SX410 IS',
        ],
        59965440 => [
            'Id' => 59965440,
            'Label' => 'PowerShot G9 X',
        ],
        60030976 => [
            'Id' => 60030976,
            'Label' => 'EOS M5',
        ],
        60096512 => [
            'Id' => 60096512,
            'Label' => 'PowerShot G5 X',
        ],
        60227584 => [
            'Id' => 60227584,
            'Label' => 'PowerShot G7 X Mark II',
        ],
        60293120 => [
            'Id' => 60293120,
            'Label' => 'EOS M100',
        ],
        60358656 => [
            'Id' => 60358656,
            'Label' => 'PowerShot ELPH 360 HS / IXUS 285 HS / IXY 650',
        ],
        67174400 => [
            'Id' => 67174400,
            'Label' => 'PowerShot SX540 HS',
        ],
        67239936 => [
            'Id' => 67239936,
            'Label' => 'PowerShot SX420 IS',
        ],
        67305472 => [
            'Id' => 67305472,
            'Label' => 'PowerShot ELPH 190 IS / IXUS 180 / IXY 190',
        ],
        67371008 => [
            'Id' => 67371008,
            'Label' => 'PowerShot G1',
        ],
        67371009 => [
            'Id' => 67371009,
            'Label' => 'PowerShot ELPH 180 IS / IXUS 175 / IXY 180',
        ],
        67436544 => [
            'Id' => 67436544,
            'Label' => 'PowerShot SX720 HS',
        ],
        67502080 => [
            'Id' => 67502080,
            'Label' => 'PowerShot SX620 HS',
        ],
        67567616 => [
            'Id' => 67567616,
            'Label' => 'EOS M6',
        ],
        68157440 => [
            'Id' => 68157440,
            'Label' => 'PowerShot G9 X Mark II',
        ],
        68485120 => [
            'Id' => 68485120,
            'Label' => 'PowerShot ELPH 185 / IXUS 185 / IXY 200',
        ],
        68550656 => [
            'Id' => 68550656,
            'Label' => 'PowerShot SX430 IS',
        ],
        68616192 => [
            'Id' => 68616192,
            'Label' => 'PowerShot SX730 HS',
        ],
        68681728 => [
            'Id' => 68681728,
            'Label' => 'PowerShot G1 X Mark III',
        ],
        100925440 => [
            'Id' => 100925440,
            'Label' => 'PowerShot S100 / Digital IXUS / IXY Digital',
        ],
        1074255475 => [
            'Id' => 1074255475,
            'Label' => 'DC19/DC21/DC22',
        ],
        1074255476 => [
            'Id' => 1074255476,
            'Label' => 'XH A1',
        ],
        1074255477 => [
            'Id' => 1074255477,
            'Label' => 'HV10',
        ],
        1074255478 => [
            'Id' => 1074255478,
            'Label' => 'MD130/MD140/MD150/MD160/ZR850',
        ],
        1074255735 => [
            'Id' => 1074255735,
            'Label' => 'DC50',
        ],
        1074255736 => [
            'Id' => 1074255736,
            'Label' => 'HV20',
        ],
        1074255737 => [
            'Id' => 1074255737,
            'Label' => 'DC211',
        ],
        1074255738 => [
            'Id' => 1074255738,
            'Label' => 'HG10',
        ],
        1074255739 => [
            'Id' => 1074255739,
            'Label' => 'HR10',
        ],
        1074255741 => [
            'Id' => 1074255741,
            'Label' => 'MD255/ZR950',
        ],
        1074255900 => [
            'Id' => 1074255900,
            'Label' => 'HF11',
        ],
        1074255992 => [
            'Id' => 1074255992,
            'Label' => 'HV30',
        ],
        1074255996 => [
            'Id' => 1074255996,
            'Label' => 'XH A1S',
        ],
        1074255998 => [
            'Id' => 1074255998,
            'Label' => 'DC301/DC310/DC311/DC320/DC330',
        ],
        1074255999 => [
            'Id' => 1074255999,
            'Label' => 'FS100',
        ],
        1074256000 => [
            'Id' => 1074256000,
            'Label' => 'HF10',
        ],
        1074256002 => [
            'Id' => 1074256002,
            'Label' => 'HG20/HG21',
        ],
        1074256165 => [
            'Id' => 1074256165,
            'Label' => 'HF21',
        ],
        1074256166 => [
            'Id' => 1074256166,
            'Label' => 'HF S11',
        ],
        1074256248 => [
            'Id' => 1074256248,
            'Label' => 'HV40',
        ],
        1074256263 => [
            'Id' => 1074256263,
            'Label' => 'DC410/DC411/DC420',
        ],
        1074256264 => [
            'Id' => 1074256264,
            'Label' => 'FS19/FS20/FS21/FS22/FS200',
        ],
        1074256265 => [
            'Id' => 1074256265,
            'Label' => 'HF20/HF200',
        ],
        1074256266 => [
            'Id' => 1074256266,
            'Label' => 'HF S10/S100',
        ],
        1074256526 => [
            'Id' => 1074256526,
            'Label' => 'HF R10/R16/R17/R18/R100/R106',
        ],
        1074256527 => [
            'Id' => 1074256527,
            'Label' => 'HF M30/M31/M36/M300/M306',
        ],
        1074256528 => [
            'Id' => 1074256528,
            'Label' => 'HF S20/S21/S200',
        ],
        1074256530 => [
            'Id' => 1074256530,
            'Label' => 'FS31/FS36/FS37/FS300/FS305/FS306/FS307',
        ],
        1074257056 => [
            'Id' => 1074257056,
            'Label' => 'EOS C300',
        ],
        1074257321 => [
            'Id' => 1074257321,
            'Label' => 'HF G25',
        ],
        1074257844 => [
            'Id' => 1074257844,
            'Label' => 'XC10',
        ],
        1074258371 => [
            'Id' => 1074258371,
            'Label' => 'EOS C200',
        ],
        '2147483649' => [
            'Id' => '2147483649',
            'Label' => 'EOS-1D',
        ],
        '2147484007' => [
            'Id' => '2147484007',
            'Label' => 'EOS-1DS',
        ],
        '2147484008' => [
            'Id' => '2147484008',
            'Label' => 'EOS 10D',
        ],
        '2147484009' => [
            'Id' => '2147484009',
            'Label' => 'EOS-1D Mark III',
        ],
        '2147484016' => [
            'Id' => '2147484016',
            'Label' => 'EOS Digital Rebel / 300D / Kiss Digital',
        ],
        '2147484020' => [
            'Id' => '2147484020',
            'Label' => 'EOS-1D Mark II',
        ],
        '2147484021' => [
            'Id' => '2147484021',
            'Label' => 'EOS 20D',
        ],
        '2147484022' => [
            'Id' => '2147484022',
            'Label' => 'EOS Digital Rebel XSi / 450D / Kiss X2',
        ],
        '2147484040' => [
            'Id' => '2147484040',
            'Label' => 'EOS-1Ds Mark II',
        ],
        '2147484041' => [
            'Id' => '2147484041',
            'Label' => 'EOS Digital Rebel XT / 350D / Kiss Digital N',
        ],
        '2147484048' => [
            'Id' => '2147484048',
            'Label' => 'EOS 40D',
        ],
        '2147484179' => [
            'Id' => '2147484179',
            'Label' => 'EOS 5D',
        ],
        '2147484181' => [
            'Id' => '2147484181',
            'Label' => 'EOS-1Ds Mark III',
        ],
        '2147484184' => [
            'Id' => '2147484184',
            'Label' => 'EOS 5D Mark II',
        ],
        '2147484185' => [
            'Id' => '2147484185',
            'Label' => 'WFT-E1',
        ],
        '2147484210' => [
            'Id' => '2147484210',
            'Label' => 'EOS-1D Mark II N',
        ],
        '2147484212' => [
            'Id' => '2147484212',
            'Label' => 'EOS 30D',
        ],
        '2147484214' => [
            'Id' => '2147484214',
            'Label' => 'EOS Digital Rebel XTi / 400D / Kiss Digital X',
        ],
        '2147484225' => [
            'Id' => '2147484225',
            'Label' => 'WFT-E2',
        ],
        '2147484230' => [
            'Id' => '2147484230',
            'Label' => 'WFT-E3',
        ],
        '2147484240' => [
            'Id' => '2147484240',
            'Label' => 'EOS 7D',
        ],
        '2147484242' => [
            'Id' => '2147484242',
            'Label' => 'EOS Rebel T1i / 500D / Kiss X3',
        ],
        '2147484244' => [
            'Id' => '2147484244',
            'Label' => 'EOS Rebel XS / 1000D / Kiss F',
        ],
        '2147484257' => [
            'Id' => '2147484257',
            'Label' => 'EOS 50D',
        ],
        '2147484265' => [
            'Id' => '2147484265',
            'Label' => 'EOS-1D X',
        ],
        '2147484272' => [
            'Id' => '2147484272',
            'Label' => 'EOS Rebel T2i / 550D / Kiss X4',
        ],
        '2147484273' => [
            'Id' => '2147484273',
            'Label' => 'WFT-E4',
        ],
        '2147484275' => [
            'Id' => '2147484275',
            'Label' => 'WFT-E5',
        ],
        '2147484289' => [
            'Id' => '2147484289',
            'Label' => 'EOS-1D Mark IV',
        ],
        '2147484293' => [
            'Id' => '2147484293',
            'Label' => 'EOS 5D Mark III',
        ],
        '2147484294' => [
            'Id' => '2147484294',
            'Label' => 'EOS Rebel T3i / 600D / Kiss X5',
        ],
        '2147484295' => [
            'Id' => '2147484295',
            'Label' => 'EOS 60D',
        ],
        '2147484296' => [
            'Id' => '2147484296',
            'Label' => 'EOS Rebel T3 / 1100D / Kiss X50',
        ],
        '2147484297' => [
            'Id' => '2147484297',
            'Label' => 'EOS 7D Mark II',
        ],
        '2147484311' => [
            'Id' => '2147484311',
            'Label' => 'WFT-E2 II',
        ],
        '2147484312' => [
            'Id' => '2147484312',
            'Label' => 'WFT-E4 II',
        ],
        '2147484417' => [
            'Id' => '2147484417',
            'Label' => 'EOS Rebel T4i / 650D / Kiss X6i',
        ],
        '2147484418' => [
            'Id' => '2147484418',
            'Label' => 'EOS 6D',
        ],
        '2147484452' => [
            'Id' => '2147484452',
            'Label' => 'EOS-1D C',
        ],
        '2147484453' => [
            'Id' => '2147484453',
            'Label' => 'EOS 70D',
        ],
        '2147484454' => [
            'Id' => '2147484454',
            'Label' => 'EOS Rebel T5i / 700D / Kiss X7i',
        ],
        '2147484455' => [
            'Id' => '2147484455',
            'Label' => 'EOS Rebel T5 / 1200D / Kiss X70 / Hi',
        ],
        '2147484456' => [
            'Id' => '2147484456',
            'Label' => 'EOS-1D X Mark II',
        ],
        '2147484465' => [
            'Id' => '2147484465',
            'Label' => 'EOS M',
        ],
        '2147484486' => [
            'Id' => '2147484486',
            'Label' => 'EOS Rebel SL1 / 100D / Kiss X7',
        ],
        '2147484487' => [
            'Id' => '2147484487',
            'Label' => 'EOS Rebel T6s / 760D / 8000D',
        ],
        '2147484489' => [
            'Id' => '2147484489',
            'Label' => 'EOS 5D Mark IV',
        ],
        '2147484496' => [
            'Id' => '2147484496',
            'Label' => 'EOS 80D',
        ],
        '2147484501' => [
            'Id' => '2147484501',
            'Label' => 'EOS M2',
        ],
        '2147484546' => [
            'Id' => '2147484546',
            'Label' => 'EOS 5DS',
        ],
        '2147484563' => [
            'Id' => '2147484563',
            'Label' => 'EOS Rebel T6i / 750D / Kiss X8i',
        ],
        '2147484673' => [
            'Id' => '2147484673',
            'Label' => 'EOS 5DS R',
        ],
        '2147484676' => [
            'Id' => '2147484676',
            'Label' => 'EOS Rebel T6 / 1300D / Kiss X80',
        ],
        '2147484677' => [
            'Id' => '2147484677',
            'Label' => 'EOS Rebel T7i / 800D / Kiss X9i',
        ],
        '2147484678' => [
            'Id' => '2147484678',
            'Label' => 'EOS 6D Mark II',
        ],
        '2147484680' => [
            'Id' => '2147484680',
            'Label' => 'EOS 77D / 9000D',
        ],
        '2147484695' => [
            'Id' => '2147484695',
            'Label' => 'EOS Rebel SL2 / 200D / Kiss X9',
        ],
        '2147484706' => [
            'Id' => '2147484706',
            'Label' => 'EOS Rebel T100 / 4000D / 3000D',
        ],
        '2147484708' => [
            'Id' => '2147484708',
            'Label' => 'EOS R',
        ],
        '2147484712' => [
            'Id' => '2147484712',
            'Label' => 'EOS-1D X Mark III',
        ],
        '2147484722' => [
            'Id' => '2147484722',
            'Label' => 'EOS Rebel T7 / 2000D / 1500D / Kiss X90',
        ],
        '2147484723' => [
            'Id' => '2147484723',
            'Label' => 'EOS RP',
        ],
        '2147484726' => [
            'Id' => '2147484726',
            'Label' => 'EOS SL3 / 250D / Kiss X10',
        ],
        '2147484727' => [
            'Id' => '2147484727',
            'Label' => 'EOS 90D',
        ],
        '2147484960' => [
            'Id' => '2147484960',
            'Label' => 'EOS D2000C',
        ],
        '2147485024' => [
            'Id' => '2147485024',
            'Label' => 'EOS D6000C',
        ],
    ];

}
