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
class BestShotMode extends AbstractTag
{

    protected $Id = 12295;

    protected $Name = 'BestShotMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Best Shot Mode';

    protected $flag_Permanent = true;

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        1 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Portrait',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Scenery',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Portrait with Scenery',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'Children',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Sports',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Pet',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Flower',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'Natural Green',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'Autumn Leaves',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Sundown',
        ],
        12 => [
            'Id' => 12,
            'Label' => 'High Speed Night Scene',
        ],
        13 => [
            'Id' => 13,
            'Label' => 'Night Scene Portrait',
        ],
        14 => [
            'Id' => 14,
            'Label' => 'Fireworks',
        ],
        15 => [
            'Id' => 15,
            'Label' => 'High Speed Anti Shake',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'Multi-motion Image',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'High Speed Best Selection',
        ],
        18 => [
            'Id' => 18,
            'Label' => 'Move Out CS',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'Move In CS',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'Pre-record Movie',
        ],
        21 => [
            'Id' => 21,
            'Label' => 'For YouTube',
        ],
        22 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        23 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        24 => [
            'Id' => 2,
            'Label' => 'Expression CS',
        ],
        25 => [
            'Id' => 3,
            'Label' => 'Baby CS',
        ],
        26 => [
            'Id' => 4,
            'Label' => 'Child CS',
        ],
        27 => [
            'Id' => 5,
            'Label' => 'Pet CS',
        ],
        28 => [
            'Id' => 6,
            'Label' => 'Sports CS',
        ],
        29 => [
            'Id' => 7,
            'Label' => 'Child High Speed Movie',
        ],
        30 => [
            'Id' => 8,
            'Label' => 'Pet High Speed Movie',
        ],
        31 => [
            'Id' => 9,
            'Label' => 'Sports High Speed Movie',
        ],
        32 => [
            'Id' => 10,
            'Label' => 'Lag Correction',
        ],
        33 => [
            'Id' => 11,
            'Label' => 'High Speed Lighting',
        ],
        34 => [
            'Id' => 12,
            'Label' => 'High Speed Night Scene',
        ],
        35 => [
            'Id' => 13,
            'Label' => 'High Speed Night Scene and Portrait',
        ],
        36 => [
            'Id' => 14,
            'Label' => 'High Speed Anti Shake',
        ],
        37 => [
            'Id' => 15,
            'Label' => 'High Speed Best Selection',
        ],
        38 => [
            'Id' => 16,
            'Label' => 'Portrait',
        ],
        39 => [
            'Id' => 17,
            'Label' => 'Scenery',
        ],
        40 => [
            'Id' => 18,
            'Label' => 'Portrait With Scenery',
        ],
        41 => [
            'Id' => 19,
            'Label' => 'Flower',
        ],
        42 => [
            'Id' => 20,
            'Label' => 'Natural Green',
        ],
        43 => [
            'Id' => 21,
            'Label' => 'Autumn Leaves',
        ],
        44 => [
            'Id' => 22,
            'Label' => 'Sundown',
        ],
        45 => [
            'Id' => 23,
            'Label' => 'Fireworks',
        ],
        46 => [
            'Id' => 24,
            'Label' => 'Multi-motion Image',
        ],
        47 => [
            'Id' => 25,
            'Label' => 'Move Out CS',
        ],
        48 => [
            'Id' => 26,
            'Label' => 'Move In CS',
        ],
        49 => [
            'Id' => 27,
            'Label' => 'Pre-record Movie',
        ],
        50 => [
            'Id' => 28,
            'Label' => 'For YouTube',
        ],
        51 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        52 => [
            'Id' => 1,
            'Label' => 'Slow Motion Swing (behind)',
        ],
        53 => [
            'Id' => 2,
            'Label' => 'Slow Motion Swing (front)',
        ],
        54 => [
            'Id' => 3,
            'Label' => 'Self Slow Motion (behind)',
        ],
        55 => [
            'Id' => 4,
            'Label' => 'Self Slow Motion (front)',
        ],
        56 => [
            'Id' => 5,
            'Label' => 'Swing Burst',
        ],
        57 => [
            'Id' => 6,
            'Label' => 'HDR',
        ],
        58 => [
            'Id' => 7,
            'Label' => 'HDR Art',
        ],
        59 => [
            'Id' => 8,
            'Label' => 'High Speed Night Scene',
        ],
        60 => [
            'Id' => 9,
            'Label' => 'High Speed Night Scene and Portrait',
        ],
        61 => [
            'Id' => 10,
            'Label' => 'High Speed Anti Shake',
        ],
        62 => [
            'Id' => 11,
            'Label' => 'Multi SR Zoom',
        ],
        63 => [
            'Id' => 12,
            'Label' => 'Blurred Background',
        ],
        64 => [
            'Id' => 13,
            'Label' => 'Wide Shot',
        ],
        65 => [
            'Id' => 14,
            'Label' => 'Slide Panorama',
        ],
        66 => [
            'Id' => 15,
            'Label' => 'High Speed Best Selection',
        ],
        67 => [
            'Id' => 16,
            'Label' => 'Lag Correction',
        ],
        68 => [
            'Id' => 17,
            'Label' => 'High Speed CS',
        ],
        69 => [
            'Id' => 18,
            'Label' => 'Child CS',
        ],
        70 => [
            'Id' => 19,
            'Label' => 'Pet CS',
        ],
        71 => [
            'Id' => 20,
            'Label' => 'Sports CS',
        ],
        72 => [
            'Id' => 21,
            'Label' => 'Child High Speed Movie',
        ],
        73 => [
            'Id' => 22,
            'Label' => 'Pet High Speed Movie',
        ],
        74 => [
            'Id' => 23,
            'Label' => 'Sports High Speed Movie',
        ],
        75 => [
            'Id' => 24,
            'Label' => 'Portrait',
        ],
        76 => [
            'Id' => 25,
            'Label' => 'Scenery',
        ],
        77 => [
            'Id' => 26,
            'Label' => 'Portrait with Scenery',
        ],
        78 => [
            'Id' => 27,
            'Label' => 'Children',
        ],
        79 => [
            'Id' => 28,
            'Label' => 'Sports',
        ],
        80 => [
            'Id' => 29,
            'Label' => 'Candlelight Portrait',
        ],
        81 => [
            'Id' => 30,
            'Label' => 'Party',
        ],
        82 => [
            'Id' => 31,
            'Label' => 'Pet',
        ],
        83 => [
            'Id' => 32,
            'Label' => 'Flower',
        ],
        84 => [
            'Id' => 33,
            'Label' => 'Natural Green',
        ],
        85 => [
            'Id' => 34,
            'Label' => 'Autumn Leaves',
        ],
        86 => [
            'Id' => 35,
            'Label' => 'Soft Flowing Water',
        ],
        87 => [
            'Id' => 36,
            'Label' => 'Splashing Water',
        ],
        88 => [
            'Id' => 37,
            'Label' => 'Sundown',
        ],
        89 => [
            'Id' => 38,
            'Label' => 'Fireworks',
        ],
        90 => [
            'Id' => 39,
            'Label' => 'Food',
        ],
        91 => [
            'Id' => 40,
            'Label' => 'Text',
        ],
        92 => [
            'Id' => 41,
            'Label' => 'Collection',
        ],
        93 => [
            'Id' => 42,
            'Label' => 'Auction',
        ],
        94 => [
            'Id' => 43,
            'Label' => 'Pre-record Movie',
        ],
        95 => [
            'Id' => 44,
            'Label' => 'For YouTube',
        ],
        96 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        97 => [
            'Id' => 1,
            'Label' => 'Expression CS',
        ],
        98 => [
            'Id' => 2,
            'Label' => 'Baby CS',
        ],
        99 => [
            'Id' => 3,
            'Label' => 'Child CS',
        ],
        100 => [
            'Id' => 4,
            'Label' => 'Pet CS',
        ],
        101 => [
            'Id' => 5,
            'Label' => 'Sports CS',
        ],
        102 => [
            'Id' => 6,
            'Label' => 'Child High Speed Movie',
        ],
        103 => [
            'Id' => 7,
            'Label' => 'Pet High Speed Movie',
        ],
        104 => [
            'Id' => 8,
            'Label' => 'Sports High Speed Movie',
        ],
        105 => [
            'Id' => 9,
            'Label' => 'Lag Correction',
        ],
        106 => [
            'Id' => 10,
            'Label' => 'High Speed Lighting',
        ],
        107 => [
            'Id' => 11,
            'Label' => 'High Speed Night Scene',
        ],
        108 => [
            'Id' => 12,
            'Label' => 'High Speed Night Scene and Portrait',
        ],
        109 => [
            'Id' => 13,
            'Label' => 'High Speed Anti Shake',
        ],
        110 => [
            'Id' => 14,
            'Label' => 'High Speed Best Selection',
        ],
        111 => [
            'Id' => 15,
            'Label' => 'Portrait',
        ],
        112 => [
            'Id' => 16,
            'Label' => 'Scenery',
        ],
        113 => [
            'Id' => 17,
            'Label' => 'Portrait With Scenery',
        ],
        114 => [
            'Id' => 18,
            'Label' => 'Flower',
        ],
        115 => [
            'Id' => 19,
            'Label' => 'Natural Green',
        ],
        116 => [
            'Id' => 20,
            'Label' => 'Autumn Leaves',
        ],
        117 => [
            'Id' => 21,
            'Label' => 'Sundown',
        ],
        118 => [
            'Id' => 22,
            'Label' => 'Fireworks',
        ],
        119 => [
            'Id' => 23,
            'Label' => 'Multi-motion Image',
        ],
        120 => [
            'Id' => 24,
            'Label' => 'Move Out CS',
        ],
        121 => [
            'Id' => 25,
            'Label' => 'Move In CS',
        ],
        122 => [
            'Id' => 26,
            'Label' => 'Pre-record Movie',
        ],
        123 => [
            'Id' => 27,
            'Label' => 'For YouTube',
        ],
        124 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        125 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        126 => [
            'Id' => 2,
            'Label' => 'Auto Best Shot',
        ],
        127 => [
            'Id' => 3,
            'Label' => 'Dynamic Photo',
        ],
        128 => [
            'Id' => 4,
            'Label' => 'Interval Snapshot',
        ],
        129 => [
            'Id' => 5,
            'Label' => 'Interval Movie',
        ],
        130 => [
            'Id' => 6,
            'Label' => 'Portrait',
        ],
        131 => [
            'Id' => 7,
            'Label' => 'Scenery',
        ],
        132 => [
            'Id' => 8,
            'Label' => 'Portrait with Scenery',
        ],
        133 => [
            'Id' => 9,
            'Label' => 'Underwater',
        ],
        134 => [
            'Id' => 10,
            'Label' => 'Beach',
        ],
        135 => [
            'Id' => 11,
            'Label' => 'Snow',
        ],
        136 => [
            'Id' => 12,
            'Label' => 'Children',
        ],
        137 => [
            'Id' => 13,
            'Label' => 'Sports',
        ],
        138 => [
            'Id' => 14,
            'Label' => 'Pet',
        ],
        139 => [
            'Id' => 15,
            'Label' => 'Flower',
        ],
        140 => [
            'Id' => 16,
            'Label' => 'Sundown',
        ],
        141 => [
            'Id' => 17,
            'Label' => 'Night Scene',
        ],
        142 => [
            'Id' => 18,
            'Label' => 'Night Scene Portrait',
        ],
        143 => [
            'Id' => 19,
            'Label' => 'Fireworks',
        ],
        144 => [
            'Id' => 20,
            'Label' => 'Food',
        ],
        145 => [
            'Id' => 21,
            'Label' => 'For eBay',
        ],
        146 => [
            'Id' => 22,
            'Label' => 'Multi-motion Image',
        ],
        147 => [
            'Id' => 23,
            'Label' => 'Pre-record Movie',
        ],
        148 => [
            'Id' => 24,
            'Label' => 'For YouTube',
        ],
        149 => [
            'Id' => 25,
            'Label' => 'Voice Recording',
        ],
        150 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        151 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        152 => [
            'Id' => 2,
            'Label' => 'Portrait',
        ],
        153 => [
            'Id' => 3,
            'Label' => 'Scenery',
        ],
        154 => [
            'Id' => 4,
            'Label' => 'Portrait with Scenery',
        ],
        155 => [
            'Id' => 5,
            'Label' => 'Self-portrait (1 person)',
        ],
        156 => [
            'Id' => 6,
            'Label' => 'Self-portrait (2 people)',
        ],
        157 => [
            'Id' => 7,
            'Label' => 'Children',
        ],
        158 => [
            'Id' => 8,
            'Label' => 'Sports',
        ],
        159 => [
            'Id' => 9,
            'Label' => 'Candlelight Portrait',
        ],
        160 => [
            'Id' => 10,
            'Label' => 'Party',
        ],
        161 => [
            'Id' => 11,
            'Label' => 'Pet',
        ],
        162 => [
            'Id' => 12,
            'Label' => 'Flower',
        ],
        163 => [
            'Id' => 13,
            'Label' => 'Natural Green',
        ],
        164 => [
            'Id' => 14,
            'Label' => 'Autumn Leaves',
        ],
        165 => [
            'Id' => 15,
            'Label' => 'Soft Flowing Water',
        ],
        166 => [
            'Id' => 16,
            'Label' => 'Splashing Water',
        ],
        167 => [
            'Id' => 17,
            'Label' => 'Sundown',
        ],
        168 => [
            'Id' => 18,
            'Label' => 'Night Scene',
        ],
        169 => [
            'Id' => 19,
            'Label' => 'Night Scene Portrait',
        ],
        170 => [
            'Id' => 20,
            'Label' => 'Fireworks',
        ],
        171 => [
            'Id' => 21,
            'Label' => 'Food',
        ],
        172 => [
            'Id' => 22,
            'Label' => 'Text',
        ],
        173 => [
            'Id' => 23,
            'Label' => 'Collection',
        ],
        174 => [
            'Id' => 24,
            'Label' => 'Auction',
        ],
        175 => [
            'Id' => 25,
            'Label' => 'Backlight',
        ],
        176 => [
            'Id' => 26,
            'Label' => 'Anti Shake',
        ],
        177 => [
            'Id' => 27,
            'Label' => 'High Sensitivity',
        ],
        178 => [
            'Id' => 28,
            'Label' => 'Underwater',
        ],
        179 => [
            'Id' => 29,
            'Label' => 'Monochrome',
        ],
        180 => [
            'Id' => 30,
            'Label' => 'Retro',
        ],
        181 => [
            'Id' => 31,
            'Label' => 'Business Cards',
        ],
        182 => [
            'Id' => 32,
            'Label' => 'White Board',
        ],
        183 => [
            'Id' => 33,
            'Label' => 'Silent',
        ],
        184 => [
            'Id' => 34,
            'Label' => 'Pre-record Movie',
        ],
        185 => [
            'Id' => 35,
            'Label' => 'For YouTube',
        ],
        186 => [
            'Id' => 36,
            'Label' => 'Voice Recording',
        ],
        187 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        188 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        189 => [
            'Id' => 2,
            'Label' => 'Portrait',
        ],
        190 => [
            'Id' => 3,
            'Label' => 'Scenery',
        ],
        191 => [
            'Id' => 4,
            'Label' => 'Portrait with Scenery',
        ],
        192 => [
            'Id' => 5,
            'Label' => 'Children',
        ],
        193 => [
            'Id' => 6,
            'Label' => 'Sports',
        ],
        194 => [
            'Id' => 7,
            'Label' => 'Candlelight Portrait',
        ],
        195 => [
            'Id' => 8,
            'Label' => 'Party',
        ],
        196 => [
            'Id' => 9,
            'Label' => 'Pet',
        ],
        197 => [
            'Id' => 10,
            'Label' => 'Flower',
        ],
        198 => [
            'Id' => 11,
            'Label' => 'Natural Green',
        ],
        199 => [
            'Id' => 12,
            'Label' => 'Autumn Leaves',
        ],
        200 => [
            'Id' => 13,
            'Label' => 'Soft Flowing Water',
        ],
        201 => [
            'Id' => 14,
            'Label' => 'Splashing Water',
        ],
        202 => [
            'Id' => 15,
            'Label' => 'Sundown',
        ],
        203 => [
            'Id' => 16,
            'Label' => 'Night Scene',
        ],
        204 => [
            'Id' => 17,
            'Label' => 'Night Scene Portrait',
        ],
        205 => [
            'Id' => 18,
            'Label' => 'Fireworks',
        ],
        206 => [
            'Id' => 19,
            'Label' => 'Food',
        ],
        207 => [
            'Id' => 20,
            'Label' => 'Text',
        ],
        208 => [
            'Id' => 21,
            'Label' => 'Collection',
        ],
        209 => [
            'Id' => 22,
            'Label' => 'Auction',
        ],
        210 => [
            'Id' => 23,
            'Label' => 'Backlight',
        ],
        211 => [
            'Id' => 24,
            'Label' => 'Anti Shake',
        ],
        212 => [
            'Id' => 25,
            'Label' => 'High Sensitivity',
        ],
        213 => [
            'Id' => 26,
            'Label' => 'Monochrome',
        ],
        214 => [
            'Id' => 27,
            'Label' => 'Retro',
        ],
        215 => [
            'Id' => 28,
            'Label' => 'Twilight',
        ],
        216 => [
            'Id' => 29,
            'Label' => 'Layout (2 images)',
        ],
        217 => [
            'Id' => 30,
            'Label' => 'Layout (3 images)',
        ],
        218 => [
            'Id' => 31,
            'Label' => 'Auto Framing',
        ],
        219 => [
            'Id' => 32,
            'Label' => 'Old Photo',
        ],
        220 => [
            'Id' => 33,
            'Label' => 'Business Cards',
        ],
        221 => [
            'Id' => 34,
            'Label' => 'White Board',
        ],
        222 => [
            'Id' => 35,
            'Label' => 'Silent',
        ],
        223 => [
            'Id' => 36,
            'Label' => 'Short Movie',
        ],
        224 => [
            'Id' => 37,
            'Label' => 'Past Movie',
        ],
        225 => [
            'Id' => 38,
            'Label' => 'For YouTube',
        ],
        226 => [
            'Id' => 39,
            'Label' => 'Voice Recording',
        ],
        227 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        228 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        229 => [
            'Id' => 2,
            'Label' => 'Portrait',
        ],
        230 => [
            'Id' => 3,
            'Label' => 'Scenery',
        ],
        231 => [
            'Id' => 4,
            'Label' => 'Portrait with Scenery',
        ],
        232 => [
            'Id' => 5,
            'Label' => 'Children',
        ],
        233 => [
            'Id' => 6,
            'Label' => 'Sports',
        ],
        234 => [
            'Id' => 7,
            'Label' => 'Candlelight Portrait',
        ],
        235 => [
            'Id' => 8,
            'Label' => 'Party',
        ],
        236 => [
            'Id' => 9,
            'Label' => 'Pet',
        ],
        237 => [
            'Id' => 10,
            'Label' => 'Flower',
        ],
        238 => [
            'Id' => 11,
            'Label' => 'Soft Flowing Water',
        ],
        239 => [
            'Id' => 12,
            'Label' => 'Sundown',
        ],
        240 => [
            'Id' => 13,
            'Label' => 'Night Scene',
        ],
        241 => [
            'Id' => 14,
            'Label' => 'Night Scene Portrait',
        ],
        242 => [
            'Id' => 15,
            'Label' => 'Fireworks',
        ],
        243 => [
            'Id' => 16,
            'Label' => 'Food',
        ],
        244 => [
            'Id' => 17,
            'Label' => 'Text',
        ],
        245 => [
            'Id' => 18,
            'Label' => 'For eBay',
        ],
        246 => [
            'Id' => 19,
            'Label' => 'Backlight',
        ],
        247 => [
            'Id' => 20,
            'Label' => 'Anti Shake',
        ],
        248 => [
            'Id' => 21,
            'Label' => 'High Sensitivity',
        ],
        249 => [
            'Id' => 22,
            'Label' => 'For YouTube',
        ],
        250 => [
            'Id' => 23,
            'Label' => 'Voice Recording',
        ],
        251 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        252 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        253 => [
            'Id' => 2,
            'Label' => 'Movie',
        ],
        254 => [
            'Id' => 3,
            'Label' => 'Portrait',
        ],
        255 => [
            'Id' => 4,
            'Label' => 'Scenery',
        ],
        256 => [
            'Id' => 5,
            'Label' => 'Children',
        ],
        257 => [
            'Id' => 6,
            'Label' => 'Sports',
        ],
        258 => [
            'Id' => 7,
            'Label' => 'Candlelight Portrait',
        ],
        259 => [
            'Id' => 8,
            'Label' => 'Party',
        ],
        260 => [
            'Id' => 9,
            'Label' => 'Pet',
        ],
        261 => [
            'Id' => 10,
            'Label' => 'Flower',
        ],
        262 => [
            'Id' => 11,
            'Label' => 'Soft Flowing Water',
        ],
        263 => [
            'Id' => 12,
            'Label' => 'Sundown',
        ],
        264 => [
            'Id' => 13,
            'Label' => 'Night Scene',
        ],
        265 => [
            'Id' => 14,
            'Label' => 'Night Scene Portrait',
        ],
        266 => [
            'Id' => 15,
            'Label' => 'Fireworks',
        ],
        267 => [
            'Id' => 16,
            'Label' => 'Food',
        ],
        268 => [
            'Id' => 17,
            'Label' => 'Text',
        ],
        269 => [
            'Id' => 18,
            'Label' => 'Auction',
        ],
        270 => [
            'Id' => 19,
            'Label' => 'Backlight',
        ],
        271 => [
            'Id' => 20,
            'Label' => 'Anti Shake',
        ],
        272 => [
            'Id' => 21,
            'Label' => 'High Sensitivity',
        ],
        273 => [
            'Id' => 22,
            'Label' => 'For YouTube',
        ],
        274 => [
            'Id' => 23,
            'Label' => 'Voice Recording',
        ],
        275 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        276 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        277 => [
            'Id' => 2,
            'Label' => 'Portrait',
        ],
        278 => [
            'Id' => 3,
            'Label' => 'Scenery',
        ],
        279 => [
            'Id' => 4,
            'Label' => 'Portrait with Scenery',
        ],
        280 => [
            'Id' => 5,
            'Label' => 'Pet',
        ],
        281 => [
            'Id' => 6,
            'Label' => 'Self-portrait (1 person)',
        ],
        282 => [
            'Id' => 7,
            'Label' => 'Self-portrait (2 people)',
        ],
        283 => [
            'Id' => 8,
            'Label' => 'Flower',
        ],
        284 => [
            'Id' => 9,
            'Label' => 'Food',
        ],
        285 => [
            'Id' => 10,
            'Label' => 'Fashion Accessories',
        ],
        286 => [
            'Id' => 11,
            'Label' => 'Magazine',
        ],
        287 => [
            'Id' => 12,
            'Label' => 'Monochrome',
        ],
        288 => [
            'Id' => 13,
            'Label' => 'Retro',
        ],
        289 => [
            'Id' => 14,
            'Label' => 'Cross Filter',
        ],
        290 => [
            'Id' => 15,
            'Label' => 'Pastel',
        ],
        291 => [
            'Id' => 16,
            'Label' => 'Night Scene',
        ],
        292 => [
            'Id' => 17,
            'Label' => 'Night Scene Portrait',
        ],
        293 => [
            'Id' => 18,
            'Label' => 'Party',
        ],
        294 => [
            'Id' => 19,
            'Label' => 'Sports',
        ],
        295 => [
            'Id' => 20,
            'Label' => 'Children',
        ],
        296 => [
            'Id' => 21,
            'Label' => 'Sundown',
        ],
        297 => [
            'Id' => 22,
            'Label' => 'Fireworks',
        ],
        298 => [
            'Id' => 23,
            'Label' => 'Underwater',
        ],
        299 => [
            'Id' => 24,
            'Label' => 'Backlight',
        ],
        300 => [
            'Id' => 25,
            'Label' => 'High Sensitivity',
        ],
        301 => [
            'Id' => 26,
            'Label' => 'Auction',
        ],
        302 => [
            'Id' => 27,
            'Label' => 'White Board',
        ],
        303 => [
            'Id' => 28,
            'Label' => 'Pre-record Movie',
        ],
        304 => [
            'Id' => 29,
            'Label' => 'For YouTube',
        ],
        305 => [
            'Id' => 30,
            'Label' => 'Voice Recording',
        ],
        306 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        307 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        308 => [
            'Id' => 2,
            'Label' => 'Auto Best Shot',
        ],
        309 => [
            'Id' => 3,
            'Label' => 'Portrait',
        ],
        310 => [
            'Id' => 4,
            'Label' => 'Scenery',
        ],
        311 => [
            'Id' => 5,
            'Label' => 'Portrait with Scenery',
        ],
        312 => [
            'Id' => 6,
            'Label' => 'Self-portrait (1 person)',
        ],
        313 => [
            'Id' => 7,
            'Label' => 'Self-portrait (2 people)',
        ],
        314 => [
            'Id' => 8,
            'Label' => 'Children',
        ],
        315 => [
            'Id' => 9,
            'Label' => 'Sports',
        ],
        316 => [
            'Id' => 10,
            'Label' => 'Candlelight Portrait',
        ],
        317 => [
            'Id' => 11,
            'Label' => 'Party',
        ],
        318 => [
            'Id' => 12,
            'Label' => 'Pet',
        ],
        319 => [
            'Id' => 13,
            'Label' => 'Flower',
        ],
        320 => [
            'Id' => 14,
            'Label' => 'Natural Green',
        ],
        321 => [
            'Id' => 15,
            'Label' => 'Autumn Leaves',
        ],
        322 => [
            'Id' => 16,
            'Label' => 'Soft Flowing Water',
        ],
        323 => [
            'Id' => 17,
            'Label' => 'Splashing Water',
        ],
        324 => [
            'Id' => 18,
            'Label' => 'Sundown',
        ],
        325 => [
            'Id' => 19,
            'Label' => 'Night Scene',
        ],
        326 => [
            'Id' => 20,
            'Label' => 'Night Scene Portrait',
        ],
        327 => [
            'Id' => 21,
            'Label' => 'Fireworks',
        ],
        328 => [
            'Id' => 22,
            'Label' => 'Food',
        ],
        329 => [
            'Id' => 23,
            'Label' => 'Text',
        ],
        330 => [
            'Id' => 24,
            'Label' => 'Collection',
        ],
        331 => [
            'Id' => 25,
            'Label' => 'Auction',
        ],
        332 => [
            'Id' => 26,
            'Label' => 'Backlight',
        ],
        333 => [
            'Id' => 27,
            'Label' => 'Anti Shake',
        ],
        334 => [
            'Id' => 28,
            'Label' => 'High Sensitivity',
        ],
        335 => [
            'Id' => 29,
            'Label' => 'Underwater',
        ],
        336 => [
            'Id' => 30,
            'Label' => 'Monochrome',
        ],
        337 => [
            'Id' => 31,
            'Label' => 'Retro',
        ],
        338 => [
            'Id' => 32,
            'Label' => 'Twilight',
        ],
        339 => [
            'Id' => 33,
            'Label' => 'ID Photo',
        ],
        340 => [
            'Id' => 34,
            'Label' => 'Business Cards',
        ],
        341 => [
            'Id' => 35,
            'Label' => 'White Board',
        ],
        342 => [
            'Id' => 36,
            'Label' => 'Silent',
        ],
        343 => [
            'Id' => 37,
            'Label' => 'Pre-record Movie',
        ],
        344 => [
            'Id' => 38,
            'Label' => 'For YouTube',
        ],
        345 => [
            'Id' => 39,
            'Label' => 'Voice Recording',
        ],
        346 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        347 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        348 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        349 => [
            'Id' => 3,
            'Label' => 'Portrait with Scenery',
        ],
        350 => [
            'Id' => 4,
            'Label' => 'Children',
        ],
        351 => [
            'Id' => 5,
            'Label' => 'Sports',
        ],
        352 => [
            'Id' => 6,
            'Label' => 'Candlelight Portrait',
        ],
        353 => [
            'Id' => 7,
            'Label' => 'Party',
        ],
        354 => [
            'Id' => 8,
            'Label' => 'Pet',
        ],
        355 => [
            'Id' => 9,
            'Label' => 'Flower',
        ],
        356 => [
            'Id' => 10,
            'Label' => 'Natural Green',
        ],
        357 => [
            'Id' => 11,
            'Label' => 'Soft Flowing Water',
        ],
        358 => [
            'Id' => 12,
            'Label' => 'Splashing Water',
        ],
        359 => [
            'Id' => 13,
            'Label' => 'Sundown',
        ],
        360 => [
            'Id' => 14,
            'Label' => 'Night Scene',
        ],
        361 => [
            'Id' => 15,
            'Label' => 'Night Scene Portrait',
        ],
        362 => [
            'Id' => 16,
            'Label' => 'Fireworks',
        ],
        363 => [
            'Id' => 17,
            'Label' => 'Food',
        ],
        364 => [
            'Id' => 18,
            'Label' => 'Text',
        ],
        365 => [
            'Id' => 19,
            'Label' => 'Collection',
        ],
        366 => [
            'Id' => 20,
            'Label' => 'Backlight',
        ],
        367 => [
            'Id' => 21,
            'Label' => 'Anti Shake',
        ],
        368 => [
            'Id' => 22,
            'Label' => 'Pastel',
        ],
        369 => [
            'Id' => 23,
            'Label' => 'Illustration',
        ],
        370 => [
            'Id' => 24,
            'Label' => 'Cross Filter',
        ],
        371 => [
            'Id' => 25,
            'Label' => 'Monochrome',
        ],
        372 => [
            'Id' => 26,
            'Label' => 'Retro',
        ],
        373 => [
            'Id' => 27,
            'Label' => 'Twilight',
        ],
        374 => [
            'Id' => 28,
            'Label' => 'Old Photo',
        ],
        375 => [
            'Id' => 29,
            'Label' => 'ID Photo',
        ],
        376 => [
            'Id' => 30,
            'Label' => 'Business Cards',
        ],
        377 => [
            'Id' => 31,
            'Label' => 'White Board',
        ],
        378 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        379 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        380 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        381 => [
            'Id' => 3,
            'Label' => 'Night Scene',
        ],
        382 => [
            'Id' => 4,
            'Label' => 'Fireworks',
        ],
        383 => [
            'Id' => 5,
            'Label' => 'Backlight',
        ],
        384 => [
            'Id' => 6,
            'Label' => 'Silent',
        ],
        385 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        386 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        387 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        388 => [
            'Id' => 3,
            'Label' => 'Portrait with Scenery',
        ],
        389 => [
            'Id' => 4,
            'Label' => 'Children',
        ],
        390 => [
            'Id' => 5,
            'Label' => 'Sports',
        ],
        391 => [
            'Id' => 6,
            'Label' => 'Candlelight Portrait',
        ],
        392 => [
            'Id' => 7,
            'Label' => 'Party',
        ],
        393 => [
            'Id' => 8,
            'Label' => 'Pet',
        ],
        394 => [
            'Id' => 9,
            'Label' => 'Flower',
        ],
        395 => [
            'Id' => 10,
            'Label' => 'Natural Green',
        ],
        396 => [
            'Id' => 11,
            'Label' => 'Autumn Leaves',
        ],
        397 => [
            'Id' => 12,
            'Label' => 'Soft Flowing Water',
        ],
        398 => [
            'Id' => 13,
            'Label' => 'Splashing Water',
        ],
        399 => [
            'Id' => 14,
            'Label' => 'Sundown',
        ],
        400 => [
            'Id' => 15,
            'Label' => 'Night Scene',
        ],
        401 => [
            'Id' => 16,
            'Label' => 'Night Scene Portrait',
        ],
        402 => [
            'Id' => 17,
            'Label' => 'Fireworks',
        ],
        403 => [
            'Id' => 18,
            'Label' => 'Food',
        ],
        404 => [
            'Id' => 19,
            'Label' => 'Text',
        ],
        405 => [
            'Id' => 20,
            'Label' => 'Collection',
        ],
        406 => [
            'Id' => 21,
            'Label' => 'For eBay',
        ],
        407 => [
            'Id' => 22,
            'Label' => 'Backlight',
        ],
        408 => [
            'Id' => 23,
            'Label' => 'Anti Shake',
        ],
        409 => [
            'Id' => 24,
            'Label' => 'High Sensitivity',
        ],
        410 => [
            'Id' => 25,
            'Label' => 'Pastel',
        ],
        411 => [
            'Id' => 26,
            'Label' => 'Illustration',
        ],
        412 => [
            'Id' => 27,
            'Label' => 'Cross Filter',
        ],
        413 => [
            'Id' => 28,
            'Label' => 'Monochrome',
        ],
        414 => [
            'Id' => 29,
            'Label' => 'Retro',
        ],
        415 => [
            'Id' => 30,
            'Label' => 'Twilight',
        ],
        416 => [
            'Id' => 31,
            'Label' => 'ID Photo',
        ],
        417 => [
            'Id' => 32,
            'Label' => 'Old Photo',
        ],
        418 => [
            'Id' => 33,
            'Label' => 'Business Cards',
        ],
        419 => [
            'Id' => 34,
            'Label' => 'White Board',
        ],
        420 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        421 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        422 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        423 => [
            'Id' => 3,
            'Label' => 'Night Scene',
        ],
        424 => [
            'Id' => 4,
            'Label' => 'Fireworks',
        ],
        425 => [
            'Id' => 5,
            'Label' => 'Backlight',
        ],
        426 => [
            'Id' => 6,
            'Label' => 'High Sensitivity',
        ],
        427 => [
            'Id' => 7,
            'Label' => 'Silent',
        ],
        428 => [
            'Id' => 8,
            'Label' => 'Short Movie',
        ],
        429 => [
            'Id' => 9,
            'Label' => 'Past Movie',
        ],
        430 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        431 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        432 => [
            'Id' => 2,
            'Label' => 'Movie',
        ],
        433 => [
            'Id' => 3,
            'Label' => 'Portrait',
        ],
        434 => [
            'Id' => 4,
            'Label' => 'Scenery',
        ],
        435 => [
            'Id' => 5,
            'Label' => 'Portrait with Scenery',
        ],
        436 => [
            'Id' => 6,
            'Label' => 'Children',
        ],
        437 => [
            'Id' => 7,
            'Label' => 'Sports',
        ],
        438 => [
            'Id' => 8,
            'Label' => 'Candlelight Portrait',
        ],
        439 => [
            'Id' => 9,
            'Label' => 'Party',
        ],
        440 => [
            'Id' => 10,
            'Label' => 'Pet',
        ],
        441 => [
            'Id' => 11,
            'Label' => 'Flower',
        ],
        442 => [
            'Id' => 12,
            'Label' => 'Natural Green',
        ],
        443 => [
            'Id' => 13,
            'Label' => 'Autumn Leaves',
        ],
        444 => [
            'Id' => 14,
            'Label' => 'Soft Flowing Water',
        ],
        445 => [
            'Id' => 15,
            'Label' => 'Splashing Water',
        ],
        446 => [
            'Id' => 16,
            'Label' => 'Sundown',
        ],
        447 => [
            'Id' => 17,
            'Label' => 'Night Scene',
        ],
        448 => [
            'Id' => 18,
            'Label' => 'Night Scene Portrait',
        ],
        449 => [
            'Id' => 19,
            'Label' => 'Fireworks',
        ],
        450 => [
            'Id' => 20,
            'Label' => 'Food',
        ],
        451 => [
            'Id' => 21,
            'Label' => 'Text',
        ],
        452 => [
            'Id' => 22,
            'Label' => 'Collection',
        ],
        453 => [
            'Id' => 23,
            'Label' => 'For eBay',
        ],
        454 => [
            'Id' => 24,
            'Label' => 'Backlight',
        ],
        455 => [
            'Id' => 25,
            'Label' => 'Anti Shake',
        ],
        456 => [
            'Id' => 26,
            'Label' => 'High Sensitivity',
        ],
        457 => [
            'Id' => 27,
            'Label' => 'Underwater',
        ],
        458 => [
            'Id' => 28,
            'Label' => 'Monochrome',
        ],
        459 => [
            'Id' => 29,
            'Label' => 'Retro',
        ],
        460 => [
            'Id' => 30,
            'Label' => 'Twilight',
        ],
        461 => [
            'Id' => 31,
            'Label' => 'Layout (2 images)',
        ],
        462 => [
            'Id' => 32,
            'Label' => 'Layout (3 images)',
        ],
        463 => [
            'Id' => 33,
            'Label' => 'Auto Framing',
        ],
        464 => [
            'Id' => 34,
            'Label' => 'ID Photo',
        ],
        465 => [
            'Id' => 35,
            'Label' => 'Old Photo',
        ],
        466 => [
            'Id' => 36,
            'Label' => 'Business Cards',
        ],
        467 => [
            'Id' => 37,
            'Label' => 'White Board',
        ],
        468 => [
            'Id' => 38,
            'Label' => 'Voice Recording',
        ],
        469 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        470 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        471 => [
            'Id' => 2,
            'Label' => 'Movie',
        ],
        472 => [
            'Id' => 3,
            'Label' => 'Portrait',
        ],
        473 => [
            'Id' => 4,
            'Label' => 'Scenery',
        ],
        474 => [
            'Id' => 5,
            'Label' => 'Portrait with Scenery',
        ],
        475 => [
            'Id' => 6,
            'Label' => 'Children',
        ],
        476 => [
            'Id' => 7,
            'Label' => 'Sports',
        ],
        477 => [
            'Id' => 8,
            'Label' => 'Candlelight Portrait',
        ],
        478 => [
            'Id' => 9,
            'Label' => 'Party',
        ],
        479 => [
            'Id' => 10,
            'Label' => 'Pet',
        ],
        480 => [
            'Id' => 11,
            'Label' => 'Flower',
        ],
        481 => [
            'Id' => 12,
            'Label' => 'Natural Green',
        ],
        482 => [
            'Id' => 13,
            'Label' => 'Autumn Leaves',
        ],
        483 => [
            'Id' => 14,
            'Label' => 'Soft Flowing Water',
        ],
        484 => [
            'Id' => 15,
            'Label' => 'Splashing Water',
        ],
        485 => [
            'Id' => 16,
            'Label' => 'Sundown',
        ],
        486 => [
            'Id' => 17,
            'Label' => 'Night Scene',
        ],
        487 => [
            'Id' => 18,
            'Label' => 'Night Scene Portrait',
        ],
        488 => [
            'Id' => 19,
            'Label' => 'Fireworks',
        ],
        489 => [
            'Id' => 20,
            'Label' => 'Food',
        ],
        490 => [
            'Id' => 21,
            'Label' => 'Text',
        ],
        491 => [
            'Id' => 22,
            'Label' => 'Collection',
        ],
        492 => [
            'Id' => 23,
            'Label' => 'For eBay',
        ],
        493 => [
            'Id' => 24,
            'Label' => 'Backlight',
        ],
        494 => [
            'Id' => 25,
            'Label' => 'Anti Shake',
        ],
        495 => [
            'Id' => 26,
            'Label' => 'High Sensitivity',
        ],
        496 => [
            'Id' => 27,
            'Label' => 'Underwater',
        ],
        497 => [
            'Id' => 28,
            'Label' => 'Monochrome',
        ],
        498 => [
            'Id' => 29,
            'Label' => 'Retro',
        ],
        499 => [
            'Id' => 30,
            'Label' => 'Twilight',
        ],
        500 => [
            'Id' => 31,
            'Label' => 'Layout (2 images)',
        ],
        501 => [
            'Id' => 32,
            'Label' => 'Layout (3 images)',
        ],
        502 => [
            'Id' => 33,
            'Label' => 'Auto Framing',
        ],
        503 => [
            'Id' => 34,
            'Label' => 'ID Photo',
        ],
        504 => [
            'Id' => 35,
            'Label' => 'Old Photo',
        ],
        505 => [
            'Id' => 36,
            'Label' => 'Business Cards',
        ],
        506 => [
            'Id' => 37,
            'Label' => 'White Board',
        ],
        507 => [
            'Id' => 38,
            'Label' => 'Short Movie',
        ],
        508 => [
            'Id' => 39,
            'Label' => 'Past Movie',
        ],
        509 => [
            'Id' => 40,
            'Label' => 'For YouTube',
        ],
        510 => [
            'Id' => 41,
            'Label' => 'Voice Recording',
        ],
        511 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        512 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        513 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        514 => [
            'Id' => 3,
            'Label' => 'Portrait with Scenery',
        ],
        515 => [
            'Id' => 4,
            'Label' => 'Children',
        ],
        516 => [
            'Id' => 5,
            'Label' => 'Sports',
        ],
        517 => [
            'Id' => 6,
            'Label' => 'Candlelight Portrait',
        ],
        518 => [
            'Id' => 7,
            'Label' => 'Party',
        ],
        519 => [
            'Id' => 8,
            'Label' => 'Pet',
        ],
        520 => [
            'Id' => 9,
            'Label' => 'Flower',
        ],
        521 => [
            'Id' => 10,
            'Label' => 'Natural Green',
        ],
        522 => [
            'Id' => 11,
            'Label' => 'Autumn Leaves',
        ],
        523 => [
            'Id' => 12,
            'Label' => 'Soft Flowing Water',
        ],
        524 => [
            'Id' => 13,
            'Label' => 'Splashing Water',
        ],
        525 => [
            'Id' => 14,
            'Label' => 'Sundown',
        ],
        526 => [
            'Id' => 15,
            'Label' => 'Night Scene',
        ],
        527 => [
            'Id' => 16,
            'Label' => 'Night Scene Portrait',
        ],
        528 => [
            'Id' => 17,
            'Label' => 'Fireworks',
        ],
        529 => [
            'Id' => 18,
            'Label' => 'Food',
        ],
        530 => [
            'Id' => 19,
            'Label' => 'Text',
        ],
        531 => [
            'Id' => 20,
            'Label' => 'Collection',
        ],
        532 => [
            'Id' => 21,
            'Label' => 'Auction',
        ],
        533 => [
            'Id' => 22,
            'Label' => 'Backlight',
        ],
        534 => [
            'Id' => 23,
            'Label' => 'High Sensitivity',
        ],
        535 => [
            'Id' => 24,
            'Label' => 'Underwater',
        ],
        536 => [
            'Id' => 25,
            'Label' => 'Monochrome',
        ],
        537 => [
            'Id' => 26,
            'Label' => 'Retro',
        ],
        538 => [
            'Id' => 27,
            'Label' => 'Twilight',
        ],
        539 => [
            'Id' => 28,
            'Label' => 'Layout (2 images)',
        ],
        540 => [
            'Id' => 29,
            'Label' => 'Layout (3 images)',
        ],
        541 => [
            'Id' => 30,
            'Label' => 'Auto Framing',
        ],
        542 => [
            'Id' => 31,
            'Label' => 'ID Photo',
        ],
        543 => [
            'Id' => 32,
            'Label' => 'Old Photo',
        ],
        544 => [
            'Id' => 33,
            'Label' => 'Business Cards',
        ],
        545 => [
            'Id' => 34,
            'Label' => 'White Board',
        ],
        546 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        547 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        548 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        549 => [
            'Id' => 3,
            'Label' => 'Night Scene',
        ],
        550 => [
            'Id' => 4,
            'Label' => 'Fireworks',
        ],
        551 => [
            'Id' => 5,
            'Label' => 'Backlight',
        ],
        552 => [
            'Id' => 6,
            'Label' => 'High Sensitivity',
        ],
        553 => [
            'Id' => 7,
            'Label' => 'Silent',
        ],
        554 => [
            'Id' => 8,
            'Label' => 'Short Movie',
        ],
        555 => [
            'Id' => 9,
            'Label' => 'Past Movie',
        ],
        556 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        557 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        558 => [
            'Id' => 2,
            'Label' => 'Premium Auto',
        ],
        559 => [
            'Id' => 3,
            'Label' => 'Dynamic Photo',
        ],
        560 => [
            'Id' => 4,
            'Label' => 'Portrait',
        ],
        561 => [
            'Id' => 5,
            'Label' => 'Scenery',
        ],
        562 => [
            'Id' => 6,
            'Label' => 'Portrait with Scenery',
        ],
        563 => [
            'Id' => 7,
            'Label' => 'Children',
        ],
        564 => [
            'Id' => 8,
            'Label' => 'Sports',
        ],
        565 => [
            'Id' => 9,
            'Label' => 'Candlelight Portrait',
        ],
        566 => [
            'Id' => 10,
            'Label' => 'Party',
        ],
        567 => [
            'Id' => 11,
            'Label' => 'Pet',
        ],
        568 => [
            'Id' => 12,
            'Label' => 'Flower',
        ],
        569 => [
            'Id' => 13,
            'Label' => 'Natural Green',
        ],
        570 => [
            'Id' => 14,
            'Label' => 'Autumn Leaves',
        ],
        571 => [
            'Id' => 15,
            'Label' => 'Soft Flowing Water',
        ],
        572 => [
            'Id' => 16,
            'Label' => 'Splashing Water',
        ],
        573 => [
            'Id' => 17,
            'Label' => 'Sundown',
        ],
        574 => [
            'Id' => 18,
            'Label' => 'Night Scene',
        ],
        575 => [
            'Id' => 19,
            'Label' => 'Night Scene Portrait',
        ],
        576 => [
            'Id' => 20,
            'Label' => 'Fireworks',
        ],
        577 => [
            'Id' => 21,
            'Label' => 'Food',
        ],
        578 => [
            'Id' => 22,
            'Label' => 'Text',
        ],
        579 => [
            'Id' => 23,
            'Label' => 'Collection',
        ],
        580 => [
            'Id' => 24,
            'Label' => 'For eBay',
        ],
        581 => [
            'Id' => 25,
            'Label' => 'Backlight',
        ],
        582 => [
            'Id' => 26,
            'Label' => 'High Sensitivity',
        ],
        583 => [
            'Id' => 27,
            'Label' => 'Oil Painting',
        ],
        584 => [
            'Id' => 28,
            'Label' => 'Crayon',
        ],
        585 => [
            'Id' => 29,
            'Label' => 'Water Color',
        ],
        586 => [
            'Id' => 30,
            'Label' => 'Monochrome',
        ],
        587 => [
            'Id' => 31,
            'Label' => 'Retro',
        ],
        588 => [
            'Id' => 32,
            'Label' => 'Twilight',
        ],
        589 => [
            'Id' => 33,
            'Label' => 'Multi-motion Image',
        ],
        590 => [
            'Id' => 34,
            'Label' => 'ID Photo',
        ],
        591 => [
            'Id' => 35,
            'Label' => 'Business Cards',
        ],
        592 => [
            'Id' => 36,
            'Label' => 'White Board',
        ],
        593 => [
            'Id' => 37,
            'Label' => 'Silent',
        ],
        594 => [
            'Id' => 38,
            'Label' => 'Pre-record Movie',
        ],
        595 => [
            'Id' => 39,
            'Label' => 'For YouTube',
        ],
        596 => [
            'Id' => 40,
            'Label' => 'Voice Recording',
        ],
        597 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        598 => [
            'Id' => 1,
            'Label' => 'Auto',
        ],
        599 => [
            'Id' => 2,
            'Label' => 'Premium Auto',
        ],
        600 => [
            'Id' => 3,
            'Label' => 'Dynamic Photo',
        ],
        601 => [
            'Id' => 4,
            'Label' => 'Portrait',
        ],
        602 => [
            'Id' => 5,
            'Label' => 'Scenery',
        ],
        603 => [
            'Id' => 6,
            'Label' => 'Portrait with Scenery',
        ],
        604 => [
            'Id' => 7,
            'Label' => 'Children',
        ],
        605 => [
            'Id' => 8,
            'Label' => 'Sports',
        ],
        606 => [
            'Id' => 9,
            'Label' => 'Candlelight Portrait',
        ],
        607 => [
            'Id' => 10,
            'Label' => 'Party',
        ],
        608 => [
            'Id' => 11,
            'Label' => 'Pet',
        ],
        609 => [
            'Id' => 12,
            'Label' => 'Flower',
        ],
        610 => [
            'Id' => 13,
            'Label' => 'Natural Green',
        ],
        611 => [
            'Id' => 14,
            'Label' => 'Autumn Leaves',
        ],
        612 => [
            'Id' => 15,
            'Label' => 'Soft Flowing Water',
        ],
        613 => [
            'Id' => 16,
            'Label' => 'Splashing Water',
        ],
        614 => [
            'Id' => 17,
            'Label' => 'Sundown',
        ],
        615 => [
            'Id' => 18,
            'Label' => 'Night Scene',
        ],
        616 => [
            'Id' => 19,
            'Label' => 'Night Scene Portrait',
        ],
        617 => [
            'Id' => 20,
            'Label' => 'Fireworks',
        ],
        618 => [
            'Id' => 21,
            'Label' => 'Food',
        ],
        619 => [
            'Id' => 22,
            'Label' => 'Text',
        ],
        620 => [
            'Id' => 23,
            'Label' => 'Collection',
        ],
        621 => [
            'Id' => 24,
            'Label' => 'Auction',
        ],
        622 => [
            'Id' => 25,
            'Label' => 'Backlight',
        ],
        623 => [
            'Id' => 26,
            'Label' => 'High Sensitivity',
        ],
        624 => [
            'Id' => 27,
            'Label' => 'Oil Painting',
        ],
        625 => [
            'Id' => 28,
            'Label' => 'Crayon',
        ],
        626 => [
            'Id' => 29,
            'Label' => 'Water Color',
        ],
        627 => [
            'Id' => 30,
            'Label' => 'Monochrome',
        ],
        628 => [
            'Id' => 31,
            'Label' => 'Retro',
        ],
        629 => [
            'Id' => 32,
            'Label' => 'Twilight',
        ],
        630 => [
            'Id' => 33,
            'Label' => 'Multi-motion Image',
        ],
        631 => [
            'Id' => 34,
            'Label' => 'ID Photo',
        ],
        632 => [
            'Id' => 35,
            'Label' => 'Business Cards',
        ],
        633 => [
            'Id' => 36,
            'Label' => 'White Board',
        ],
        634 => [
            'Id' => 37,
            'Label' => 'Silent',
        ],
        635 => [
            'Id' => 38,
            'Label' => 'Pre-record Movie',
        ],
        636 => [
            'Id' => 39,
            'Label' => 'For YouTube',
        ],
        637 => [
            'Id' => 40,
            'Label' => 'Voice Recording',
        ],
        638 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        639 => [
            'Id' => 1,
            'Label' => 'Portrait',
        ],
        640 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        641 => [
            'Id' => 3,
            'Label' => 'Portrait With Scenery',
        ],
        642 => [
            'Id' => 4,
            'Label' => 'Children',
        ],
        643 => [
            'Id' => 5,
            'Label' => 'Sports',
        ],
        644 => [
            'Id' => 6,
            'Label' => 'Night Scene',
        ],
        645 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        646 => [
            'Id' => 1,
            'Label' => 'Child CS',
        ],
        647 => [
            'Id' => 2,
            'Label' => 'Pet CS',
        ],
        648 => [
            'Id' => 3,
            'Label' => 'Sports CS',
        ],
        649 => [
            'Id' => 4,
            'Label' => 'Child High Speed Movie',
        ],
        650 => [
            'Id' => 5,
            'Label' => 'Pet High Speed Movie',
        ],
        651 => [
            'Id' => 6,
            'Label' => 'Sports High Speed Movie',
        ],
        652 => [
            'Id' => 7,
            'Label' => 'Multi SR Zoom',
        ],
        653 => [
            'Id' => 8,
            'Label' => 'Lag Correction',
        ],
        654 => [
            'Id' => 9,
            'Label' => 'High Speed Night Scene',
        ],
        655 => [
            'Id' => 10,
            'Label' => 'High Speed Night Scene and Portrait',
        ],
        656 => [
            'Id' => 11,
            'Label' => 'High Speed Anti Shake',
        ],
        657 => [
            'Id' => 12,
            'Label' => 'Portrait',
        ],
        658 => [
            'Id' => 13,
            'Label' => 'Scenery',
        ],
        659 => [
            'Id' => 14,
            'Label' => 'Portrait with Scenery',
        ],
        660 => [
            'Id' => 15,
            'Label' => 'Children',
        ],
        661 => [
            'Id' => 16,
            'Label' => 'Sports',
        ],
        662 => [
            'Id' => 17,
            'Label' => 'Candlelight Portrait',
        ],
        663 => [
            'Id' => 18,
            'Label' => 'Party',
        ],
        664 => [
            'Id' => 19,
            'Label' => 'Pet',
        ],
        665 => [
            'Id' => 20,
            'Label' => 'Flower',
        ],
        666 => [
            'Id' => 21,
            'Label' => 'Natural Green',
        ],
        667 => [
            'Id' => 22,
            'Label' => 'Autumn Leaves',
        ],
        668 => [
            'Id' => 23,
            'Label' => 'Soft Flowing Water',
        ],
        669 => [
            'Id' => 24,
            'Label' => 'Splashing Water',
        ],
        670 => [
            'Id' => 25,
            'Label' => 'Sundown',
        ],
        671 => [
            'Id' => 26,
            'Label' => 'Fireworks',
        ],
        672 => [
            'Id' => 27,
            'Label' => 'Food',
        ],
        673 => [
            'Id' => 28,
            'Label' => 'Text',
        ],
        674 => [
            'Id' => 29,
            'Label' => 'Collection',
        ],
        675 => [
            'Id' => 30,
            'Label' => 'For eBay',
        ],
        676 => [
            'Id' => 31,
            'Label' => 'Pre-record Movie',
        ],
        677 => [
            'Id' => 32,
            'Label' => 'For YouTube',
        ],
        678 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        679 => [
            'Id' => 1,
            'Label' => 'High Speed Night Scene',
        ],
        680 => [
            'Id' => 2,
            'Label' => 'High Speed Night Scene and Portrait',
        ],
        681 => [
            'Id' => 3,
            'Label' => 'High Speed Anti Shake',
        ],
        682 => [
            'Id' => 4,
            'Label' => 'Blurred Background',
        ],
        683 => [
            'Id' => 5,
            'Label' => 'Wide Shot',
        ],
        684 => [
            'Id' => 6,
            'Label' => 'High Speed Best Selection',
        ],
        685 => [
            'Id' => 7,
            'Label' => 'Lag Correction',
        ],
        686 => [
            'Id' => 8,
            'Label' => 'Child CS',
        ],
        687 => [
            'Id' => 9,
            'Label' => 'Pet CS',
        ],
        688 => [
            'Id' => 10,
            'Label' => 'Sports CS',
        ],
        689 => [
            'Id' => 11,
            'Label' => 'Child High Speed Movie',
        ],
        690 => [
            'Id' => 12,
            'Label' => 'Pet High Speed Movie',
        ],
        691 => [
            'Id' => 13,
            'Label' => 'Sports High Speed Movie',
        ],
        692 => [
            'Id' => 14,
            'Label' => 'Portrait',
        ],
        693 => [
            'Id' => 15,
            'Label' => 'Scenery',
        ],
        694 => [
            'Id' => 16,
            'Label' => 'Portrait with Scenery',
        ],
        695 => [
            'Id' => 17,
            'Label' => 'Children',
        ],
        696 => [
            'Id' => 18,
            'Label' => 'Sports',
        ],
        697 => [
            'Id' => 19,
            'Label' => 'Candlelight Portrait',
        ],
        698 => [
            'Id' => 20,
            'Label' => 'Party',
        ],
        699 => [
            'Id' => 21,
            'Label' => 'Pet',
        ],
        700 => [
            'Id' => 22,
            'Label' => 'Flower',
        ],
        701 => [
            'Id' => 23,
            'Label' => 'Natural Green',
        ],
        702 => [
            'Id' => 24,
            'Label' => 'Autumn Leaves',
        ],
        703 => [
            'Id' => 25,
            'Label' => 'Soft Flowing Water',
        ],
        704 => [
            'Id' => 26,
            'Label' => 'Splashing Water',
        ],
        705 => [
            'Id' => 27,
            'Label' => 'Sundown',
        ],
        706 => [
            'Id' => 28,
            'Label' => 'Fireworks',
        ],
        707 => [
            'Id' => 29,
            'Label' => 'Food',
        ],
        708 => [
            'Id' => 30,
            'Label' => 'Text',
        ],
        709 => [
            'Id' => 31,
            'Label' => 'Collection',
        ],
        710 => [
            'Id' => 32,
            'Label' => 'Auction',
        ],
        711 => [
            'Id' => 33,
            'Label' => 'Pre-record Movie',
        ],
        712 => [
            'Id' => 34,
            'Label' => 'For YouTube',
        ],
        713 => [
            'Id' => 0,
            'Label' => 'Off',
        ],
        714 => [
            'Id' => 1,
            'Label' => 'People',
        ],
        715 => [
            'Id' => 2,
            'Label' => 'Scenery',
        ],
        716 => [
            'Id' => 3,
            'Label' => 'Flower',
        ],
        717 => [
            'Id' => 4,
            'Label' => 'Night Scene',
        ],
        718 => [
            'Id' => 5,
            'Label' => 'Soft Focus',
        ],
        719 => [
            'Id' => 1,
            'Label' => 'High Speed Night Shot',
        ],
        720 => [
            'Id' => 2,
            'Label' => 'Blurred Background',
        ],
        721 => [
            'Id' => 3,
            'Label' => 'Toy Camera',
        ],
        722 => [
            'Id' => 4,
            'Label' => 'Soft Focus',
        ],
        723 => [
            'Id' => 5,
            'Label' => 'Light Tone',
        ],
        724 => [
            'Id' => 6,
            'Label' => 'Pop',
        ],
        725 => [
            'Id' => 7,
            'Label' => 'Sepia',
        ],
        726 => [
            'Id' => 8,
            'Label' => 'Monochrome',
        ],
        727 => [
            'Id' => 9,
            'Label' => 'Miniature',
        ],
        728 => [
            'Id' => 10,
            'Label' => 'Wide Shot',
        ],
        729 => [
            'Id' => 11,
            'Label' => 'High Speed Best Selection',
        ],
        730 => [
            'Id' => 12,
            'Label' => 'Lag Correction',
        ],
        731 => [
            'Id' => 13,
            'Label' => 'High Speed Night Scene',
        ],
        732 => [
            'Id' => 14,
            'Label' => 'High Speed Night Scene and Portrait',
        ],
        733 => [
            'Id' => 15,
            'Label' => 'High Speed Anti Shake',
        ],
        734 => [
            'Id' => 16,
            'Label' => 'Portrait',
        ],
        735 => [
            'Id' => 17,
            'Label' => 'Scenery',
        ],
        736 => [
            'Id' => 18,
            'Label' => 'Portrait with Scenery',
        ],
        737 => [
            'Id' => 19,
            'Label' => 'Children',
        ],
        738 => [
            'Id' => 20,
            'Label' => 'Sports',
        ],
        739 => [
            'Id' => 21,
            'Label' => 'Candlelight Portrait',
        ],
        740 => [
            'Id' => 22,
            'Label' => 'Party',
        ],
        741 => [
            'Id' => 23,
            'Label' => 'Pet',
        ],
        742 => [
            'Id' => 24,
            'Label' => 'Flower',
        ],
        743 => [
            'Id' => 25,
            'Label' => 'Natural Green',
        ],
        744 => [
            'Id' => 26,
            'Label' => 'Autumn Leaves',
        ],
        745 => [
            'Id' => 27,
            'Label' => 'Soft Flowing Water',
        ],
        746 => [
            'Id' => 28,
            'Label' => 'Splashing Water',
        ],
        747 => [
            'Id' => 29,
            'Label' => 'Sundown',
        ],
        748 => [
            'Id' => 30,
            'Label' => 'Fireworks',
        ],
        749 => [
            'Id' => 31,
            'Label' => 'Food',
        ],
        750 => [
            'Id' => 32,
            'Label' => 'Text',
        ],
        751 => [
            'Id' => 33,
            'Label' => 'Collection',
        ],
        752 => [
            'Id' => 34,
            'Label' => 'Auction',
        ],
        753 => [
            'Id' => 35,
            'Label' => 'Prerecord (Movie)',
        ],
        754 => [
            'Id' => 36,
            'Label' => 'For YouTube',
        ],
    ];

    protected $Index = 'mixed';

}
