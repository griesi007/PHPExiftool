<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AudioCodecID extends AbstractTag
{

    protected $Id = 54;

    protected $Name = 'AudioCodecID';

    protected $FullName = 'ASF::StreamProperties';

    protected $GroupName = 'ASF';

    protected $g0 = 'ASF';

    protected $g1 = 'ASF';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Audio Codec ID';

    protected $Values = [
        1 => [
            'Id' => 1,
            'Label' => 'Microsoft PCM',
        ],
        2 => [
            'Id' => 2,
            'Label' => 'Microsoft ADPCM',
        ],
        3 => [
            'Id' => 3,
            'Label' => 'Microsoft IEEE float',
        ],
        4 => [
            'Id' => 4,
            'Label' => 'Compaq VSELP',
        ],
        5 => [
            'Id' => 5,
            'Label' => 'IBM CVSD',
        ],
        6 => [
            'Id' => 6,
            'Label' => 'Microsoft a-Law',
        ],
        7 => [
            'Id' => 7,
            'Label' => 'Microsoft u-Law',
        ],
        8 => [
            'Id' => 8,
            'Label' => 'Microsoft DTS',
        ],
        9 => [
            'Id' => 9,
            'Label' => 'DRM',
        ],
        10 => [
            'Id' => 10,
            'Label' => 'WMA 9 Speech',
        ],
        11 => [
            'Id' => 11,
            'Label' => 'Microsoft Windows Media RT Voice',
        ],
        16 => [
            'Id' => 16,
            'Label' => 'OKI-ADPCM',
        ],
        17 => [
            'Id' => 17,
            'Label' => 'Intel IMA/DVI-ADPCM',
        ],
        18 => [
            'Id' => 18,
            'Label' => 'Videologic Mediaspace ADPCM',
        ],
        19 => [
            'Id' => 19,
            'Label' => 'Sierra ADPCM',
        ],
        20 => [
            'Id' => 20,
            'Label' => 'Antex G.723 ADPCM',
        ],
        21 => [
            'Id' => 21,
            'Label' => 'DSP Solutions DIGISTD',
        ],
        22 => [
            'Id' => 22,
            'Label' => 'DSP Solutions DIGIFIX',
        ],
        23 => [
            'Id' => 23,
            'Label' => 'Dialoic OKI ADPCM',
        ],
        24 => [
            'Id' => 24,
            'Label' => 'Media Vision ADPCM',
        ],
        25 => [
            'Id' => 25,
            'Label' => 'HP CU',
        ],
        26 => [
            'Id' => 26,
            'Label' => 'HP Dynamic Voice',
        ],
        32 => [
            'Id' => 32,
            'Label' => 'Yamaha ADPCM',
        ],
        33 => [
            'Id' => 33,
            'Label' => 'SONARC Speech Compression',
        ],
        34 => [
            'Id' => 34,
            'Label' => 'DSP Group True Speech',
        ],
        35 => [
            'Id' => 35,
            'Label' => 'Echo Speech Corp.',
        ],
        36 => [
            'Id' => 36,
            'Label' => 'Virtual Music Audiofile AF36',
        ],
        37 => [
            'Id' => 37,
            'Label' => 'Audio Processing Tech.',
        ],
        38 => [
            'Id' => 38,
            'Label' => 'Virtual Music Audiofile AF10',
        ],
        39 => [
            'Id' => 39,
            'Label' => 'Aculab Prosody 1612',
        ],
        40 => [
            'Id' => 40,
            'Label' => 'Merging Tech. LRC',
        ],
        48 => [
            'Id' => 48,
            'Label' => 'Dolby AC2',
        ],
        49 => [
            'Id' => 49,
            'Label' => 'Microsoft GSM610',
        ],
        50 => [
            'Id' => 50,
            'Label' => 'MSN Audio',
        ],
        51 => [
            'Id' => 51,
            'Label' => 'Antex ADPCME',
        ],
        52 => [
            'Id' => 52,
            'Label' => 'Control Resources VQLPC',
        ],
        53 => [
            'Id' => 53,
            'Label' => 'DSP Solutions DIGIREAL',
        ],
        54 => [
            'Id' => 54,
            'Label' => 'DSP Solutions DIGIADPCM',
        ],
        55 => [
            'Id' => 55,
            'Label' => 'Control Resources CR10',
        ],
        56 => [
            'Id' => 56,
            'Label' => 'Natural MicroSystems VBX ADPCM',
        ],
        57 => [
            'Id' => 57,
            'Label' => 'Crystal Semiconductor IMA ADPCM',
        ],
        58 => [
            'Id' => 58,
            'Label' => 'Echo Speech ECHOSC3',
        ],
        59 => [
            'Id' => 59,
            'Label' => 'Rockwell ADPCM',
        ],
        60 => [
            'Id' => 60,
            'Label' => 'Rockwell DIGITALK',
        ],
        61 => [
            'Id' => 61,
            'Label' => 'Xebec Multimedia',
        ],
        64 => [
            'Id' => 64,
            'Label' => 'Antex G.721 ADPCM',
        ],
        65 => [
            'Id' => 65,
            'Label' => 'Antex G.728 CELP',
        ],
        66 => [
            'Id' => 66,
            'Label' => 'Microsoft MSG723',
        ],
        67 => [
            'Id' => 67,
            'Label' => 'IBM AVC ADPCM',
        ],
        69 => [
            'Id' => 69,
            'Label' => 'ITU-T G.726',
        ],
        80 => [
            'Id' => 80,
            'Label' => 'Microsoft MPEG',
        ],
        81 => [
            'Id' => 81,
            'Label' => 'RT23 or PAC',
        ],
        82 => [
            'Id' => 82,
            'Label' => 'InSoft RT24',
        ],
        83 => [
            'Id' => 83,
            'Label' => 'InSoft PAC',
        ],
        85 => [
            'Id' => 85,
            'Label' => 'MP3',
        ],
        89 => [
            'Id' => 89,
            'Label' => 'Cirrus',
        ],
        96 => [
            'Id' => 96,
            'Label' => 'Cirrus Logic',
        ],
        97 => [
            'Id' => 97,
            'Label' => 'ESS Tech. PCM',
        ],
        98 => [
            'Id' => 98,
            'Label' => 'Voxware Inc.',
        ],
        99 => [
            'Id' => 99,
            'Label' => 'Canopus ATRAC',
        ],
        100 => [
            'Id' => 100,
            'Label' => 'APICOM G.726 ADPCM',
        ],
        101 => [
            'Id' => 101,
            'Label' => 'APICOM G.722 ADPCM',
        ],
        102 => [
            'Id' => 102,
            'Label' => 'Microsoft DSAT',
        ],
        103 => [
            'Id' => 103,
            'Label' => 'Micorsoft DSAT DISPLAY',
        ],
        105 => [
            'Id' => 105,
            'Label' => 'Voxware Byte Aligned',
        ],
        112 => [
            'Id' => 112,
            'Label' => 'Voxware AC8',
        ],
        113 => [
            'Id' => 113,
            'Label' => 'Voxware AC10',
        ],
        114 => [
            'Id' => 114,
            'Label' => 'Voxware AC16',
        ],
        115 => [
            'Id' => 115,
            'Label' => 'Voxware AC20',
        ],
        116 => [
            'Id' => 116,
            'Label' => 'Voxware MetaVoice',
        ],
        117 => [
            'Id' => 117,
            'Label' => 'Voxware MetaSound',
        ],
        118 => [
            'Id' => 118,
            'Label' => 'Voxware RT29HW',
        ],
        119 => [
            'Id' => 119,
            'Label' => 'Voxware VR12',
        ],
        120 => [
            'Id' => 120,
            'Label' => 'Voxware VR18',
        ],
        121 => [
            'Id' => 121,
            'Label' => 'Voxware TQ40',
        ],
        122 => [
            'Id' => 122,
            'Label' => 'Voxware SC3',
        ],
        123 => [
            'Id' => 123,
            'Label' => 'Voxware SC3',
        ],
        128 => [
            'Id' => 128,
            'Label' => 'Soundsoft',
        ],
        129 => [
            'Id' => 129,
            'Label' => 'Voxware TQ60',
        ],
        130 => [
            'Id' => 130,
            'Label' => 'Microsoft MSRT24',
        ],
        131 => [
            'Id' => 131,
            'Label' => 'AT&T G.729A',
        ],
        132 => [
            'Id' => 132,
            'Label' => 'Motion Pixels MVI MV12',
        ],
        133 => [
            'Id' => 133,
            'Label' => 'DataFusion G.726',
        ],
        134 => [
            'Id' => 134,
            'Label' => 'DataFusion GSM610',
        ],
        136 => [
            'Id' => 136,
            'Label' => 'Iterated Systems Audio',
        ],
        137 => [
            'Id' => 137,
            'Label' => 'Onlive',
        ],
        138 => [
            'Id' => 138,
            'Label' => 'Multitude, Inc. FT SX20',
        ],
        139 => [
            'Id' => 139,
            'Label' => 'Infocom ITS A/S G.721 ADPCM',
        ],
        140 => [
            'Id' => 140,
            'Label' => 'Convedia G729',
        ],
        141 => [
            'Id' => 141,
            'Label' => 'Not specified congruency, Inc.',
        ],
        145 => [
            'Id' => 145,
            'Label' => 'Siemens SBC24',
        ],
        146 => [
            'Id' => 146,
            'Label' => 'Sonic Foundry Dolby AC3 APDIF',
        ],
        147 => [
            'Id' => 147,
            'Label' => 'MediaSonic G.723',
        ],
        148 => [
            'Id' => 148,
            'Label' => 'Aculab Prosody 8kbps',
        ],
        151 => [
            'Id' => 151,
            'Label' => 'ZyXEL ADPCM',
        ],
        152 => [
            'Id' => 152,
            'Label' => 'Philips LPCBB',
        ],
        153 => [
            'Id' => 153,
            'Label' => 'Studer Professional Audio Packed',
        ],
        160 => [
            'Id' => 160,
            'Label' => 'Malden PhonyTalk',
        ],
        161 => [
            'Id' => 161,
            'Label' => 'Racal Recorder GSM',
        ],
        162 => [
            'Id' => 162,
            'Label' => 'Racal Recorder G720.a',
        ],
        163 => [
            'Id' => 163,
            'Label' => 'Racal G723.1',
        ],
        164 => [
            'Id' => 164,
            'Label' => 'Racal Tetra ACELP',
        ],
        176 => [
            'Id' => 176,
            'Label' => 'NEC AAC NEC Corporation',
        ],
        255 => [
            'Id' => 255,
            'Label' => 'AAC',
        ],
        256 => [
            'Id' => 256,
            'Label' => 'Rhetorex ADPCM',
        ],
        257 => [
            'Id' => 257,
            'Label' => 'IBM u-Law',
        ],
        258 => [
            'Id' => 258,
            'Label' => 'IBM a-Law',
        ],
        259 => [
            'Id' => 259,
            'Label' => 'IBM ADPCM',
        ],
        273 => [
            'Id' => 273,
            'Label' => 'Vivo G.723',
        ],
        274 => [
            'Id' => 274,
            'Label' => 'Vivo Siren',
        ],
        288 => [
            'Id' => 288,
            'Label' => 'Philips Speech Processing CELP',
        ],
        289 => [
            'Id' => 289,
            'Label' => 'Philips Speech Processing GRUNDIG',
        ],
        291 => [
            'Id' => 291,
            'Label' => 'Digital G.723',
        ],
        293 => [
            'Id' => 293,
            'Label' => 'Sanyo LD ADPCM',
        ],
        304 => [
            'Id' => 304,
            'Label' => 'Sipro Lab ACEPLNET',
        ],
        305 => [
            'Id' => 305,
            'Label' => 'Sipro Lab ACELP4800',
        ],
        306 => [
            'Id' => 306,
            'Label' => 'Sipro Lab ACELP8V3',
        ],
        307 => [
            'Id' => 307,
            'Label' => 'Sipro Lab G.729',
        ],
        308 => [
            'Id' => 308,
            'Label' => 'Sipro Lab G.729A',
        ],
        309 => [
            'Id' => 309,
            'Label' => 'Sipro Lab Kelvin',
        ],
        310 => [
            'Id' => 310,
            'Label' => 'VoiceAge AMR',
        ],
        320 => [
            'Id' => 320,
            'Label' => 'Dictaphone G.726 ADPCM',
        ],
        336 => [
            'Id' => 336,
            'Label' => 'Qualcomm PureVoice',
        ],
        337 => [
            'Id' => 337,
            'Label' => 'Qualcomm HalfRate',
        ],
        341 => [
            'Id' => 341,
            'Label' => 'Ring Zero Systems TUBGSM',
        ],
        352 => [
            'Id' => 352,
            'Label' => 'Microsoft Audio1',
        ],
        353 => [
            'Id' => 353,
            'Label' => 'Windows Media Audio V2 V7 V8 V9 / DivX audio (WMA) / Alex AC3 Audio',
        ],
        354 => [
            'Id' => 354,
            'Label' => 'Windows Media Audio Professional V9',
        ],
        355 => [
            'Id' => 355,
            'Label' => 'Windows Media Audio Lossless V9',
        ],
        356 => [
            'Id' => 356,
            'Label' => 'WMA Pro over S/PDIF',
        ],
        368 => [
            'Id' => 368,
            'Label' => 'UNISYS NAP ADPCM',
        ],
        369 => [
            'Id' => 369,
            'Label' => 'UNISYS NAP ULAW',
        ],
        370 => [
            'Id' => 370,
            'Label' => 'UNISYS NAP ALAW',
        ],
        371 => [
            'Id' => 371,
            'Label' => 'UNISYS NAP 16K',
        ],
        372 => [
            'Id' => 372,
            'Label' => 'MM SYCOM ACM SYC008 SyCom Technologies',
        ],
        373 => [
            'Id' => 373,
            'Label' => 'MM SYCOM ACM SYC701 G726L SyCom Technologies',
        ],
        374 => [
            'Id' => 374,
            'Label' => 'MM SYCOM ACM SYC701 CELP54 SyCom Technologies',
        ],
        375 => [
            'Id' => 375,
            'Label' => 'MM SYCOM ACM SYC701 CELP68 SyCom Technologies',
        ],
        376 => [
            'Id' => 376,
            'Label' => 'Knowledge Adventure ADPCM',
        ],
        384 => [
            'Id' => 384,
            'Label' => 'Fraunhofer IIS MPEG2AAC',
        ],
        400 => [
            'Id' => 400,
            'Label' => 'Digital Theater Systems DTS DS',
        ],
        512 => [
            'Id' => 512,
            'Label' => 'Creative Labs ADPCM',
        ],
        514 => [
            'Id' => 514,
            'Label' => 'Creative Labs FASTSPEECH8',
        ],
        515 => [
            'Id' => 515,
            'Label' => 'Creative Labs FASTSPEECH10',
        ],
        528 => [
            'Id' => 528,
            'Label' => 'UHER ADPCM',
        ],
        533 => [
            'Id' => 533,
            'Label' => 'Ulead DV ACM',
        ],
        534 => [
            'Id' => 534,
            'Label' => 'Ulead DV ACM',
        ],
        544 => [
            'Id' => 544,
            'Label' => 'Quarterdeck Corp.',
        ],
        560 => [
            'Id' => 560,
            'Label' => 'I-Link VC',
        ],
        576 => [
            'Id' => 576,
            'Label' => 'Aureal Semiconductor Raw Sport',
        ],
        577 => [
            'Id' => 577,
            'Label' => 'ESST AC3',
        ],
        592 => [
            'Id' => 592,
            'Label' => 'Interactive Products HSX',
        ],
        593 => [
            'Id' => 593,
            'Label' => 'Interactive Products RPELP',
        ],
        608 => [
            'Id' => 608,
            'Label' => 'Consistent CS2',
        ],
        624 => [
            'Id' => 624,
            'Label' => 'Sony SCX',
        ],
        625 => [
            'Id' => 625,
            'Label' => 'Sony SCY',
        ],
        626 => [
            'Id' => 626,
            'Label' => 'Sony ATRAC3',
        ],
        627 => [
            'Id' => 627,
            'Label' => 'Sony SPC',
        ],
        640 => [
            'Id' => 640,
            'Label' => 'TELUM Telum Inc.',
        ],
        641 => [
            'Id' => 641,
            'Label' => 'TELUMIA Telum Inc.',
        ],
        645 => [
            'Id' => 645,
            'Label' => 'Norcom Voice Systems ADPCM',
        ],
        768 => [
            'Id' => 768,
            'Label' => 'Fujitsu FM TOWNS SND',
        ],
        769 => [
            'Id' => 769,
            'Label' => 'Fujitsu (not specified)',
        ],
        770 => [
            'Id' => 770,
            'Label' => 'Fujitsu (not specified)',
        ],
        771 => [
            'Id' => 771,
            'Label' => 'Fujitsu (not specified)',
        ],
        772 => [
            'Id' => 772,
            'Label' => 'Fujitsu (not specified)',
        ],
        773 => [
            'Id' => 773,
            'Label' => 'Fujitsu (not specified)',
        ],
        774 => [
            'Id' => 774,
            'Label' => 'Fujitsu (not specified)',
        ],
        775 => [
            'Id' => 775,
            'Label' => 'Fujitsu (not specified)',
        ],
        776 => [
            'Id' => 776,
            'Label' => 'Fujitsu (not specified)',
        ],
        848 => [
            'Id' => 848,
            'Label' => 'Micronas Semiconductors, Inc. Development',
        ],
        849 => [
            'Id' => 849,
            'Label' => 'Micronas Semiconductors, Inc. CELP833',
        ],
        1024 => [
            'Id' => 1024,
            'Label' => 'Brooktree Digital',
        ],
        1025 => [
            'Id' => 1025,
            'Label' => 'Intel Music Coder (IMC)',
        ],
        1026 => [
            'Id' => 1026,
            'Label' => 'Ligos Indeo Audio',
        ],
        1104 => [
            'Id' => 1104,
            'Label' => 'QDesign Music',
        ],
        1280 => [
            'Id' => 1280,
            'Label' => 'On2 VP7 On2 Technologies',
        ],
        1281 => [
            'Id' => 1281,
            'Label' => 'On2 VP6 On2 Technologies',
        ],
        1664 => [
            'Id' => 1664,
            'Label' => 'AT&T VME VMPCM',
        ],
        1665 => [
            'Id' => 1665,
            'Label' => 'AT&T TCP',
        ],
        1792 => [
            'Id' => 1792,
            'Label' => 'YMPEG Alpha (dummy for MPEG-2 compressor)',
        ],
        2222 => [
            'Id' => 2222,
            'Label' => 'ClearJump LiteWave (lossless)',
        ],
        4096 => [
            'Id' => 4096,
            'Label' => 'Olivetti GSM',
        ],
        4097 => [
            'Id' => 4097,
            'Label' => 'Olivetti ADPCM',
        ],
        4098 => [
            'Id' => 4098,
            'Label' => 'Olivetti CELP',
        ],
        4099 => [
            'Id' => 4099,
            'Label' => 'Olivetti SBC',
        ],
        4100 => [
            'Id' => 4100,
            'Label' => 'Olivetti OPR',
        ],
        4352 => [
            'Id' => 4352,
            'Label' => 'Lernout & Hauspie',
        ],
        4353 => [
            'Id' => 4353,
            'Label' => 'Lernout & Hauspie CELP codec',
        ],
        4354 => [
            'Id' => 4354,
            'Label' => 'Lernout & Hauspie SBC codec',
        ],
        4355 => [
            'Id' => 4355,
            'Label' => 'Lernout & Hauspie SBC codec',
        ],
        4356 => [
            'Id' => 4356,
            'Label' => 'Lernout & Hauspie SBC codec',
        ],
        5120 => [
            'Id' => 5120,
            'Label' => 'Norris Comm. Inc.',
        ],
        5121 => [
            'Id' => 5121,
            'Label' => 'ISIAudio',
        ],
        5376 => [
            'Id' => 5376,
            'Label' => 'AT&T Soundspace Music Compression',
        ],
        6172 => [
            'Id' => 6172,
            'Label' => 'VoxWare RT24 speech codec',
        ],
        6174 => [
            'Id' => 6174,
            'Label' => 'Lucent elemedia AX24000P Music codec',
        ],
        6513 => [
            'Id' => 6513,
            'Label' => 'Sonic Foundry LOSSLESS',
        ],
        6521 => [
            'Id' => 6521,
            'Label' => 'Innings Telecom Inc. ADPCM',
        ],
        7175 => [
            'Id' => 7175,
            'Label' => 'Lucent SX8300P speech codec',
        ],
        7180 => [
            'Id' => 7180,
            'Label' => 'Lucent SX5363S G.723 compliant codec',
        ],
        7939 => [
            'Id' => 7939,
            'Label' => 'CUseeMe DigiTalk (ex-Rocwell)',
        ],
        8132 => [
            'Id' => 8132,
            'Label' => 'NCT Soft ALF2CD ACM',
        ],
        8192 => [
            'Id' => 8192,
            'Label' => 'FAST Multimedia DVM',
        ],
        8193 => [
            'Id' => 8193,
            'Label' => 'Dolby DTS (Digital Theater System)',
        ],
        8194 => [
            'Id' => 8194,
            'Label' => 'RealAudio 1 / 2 14.4',
        ],
        8195 => [
            'Id' => 8195,
            'Label' => 'RealAudio 1 / 2 28.8',
        ],
        8196 => [
            'Id' => 8196,
            'Label' => 'RealAudio G2 / 8 Cook (low bitrate)',
        ],
        8197 => [
            'Id' => 8197,
            'Label' => 'RealAudio 3 / 4 / 5 Music (DNET)',
        ],
        8198 => [
            'Id' => 8198,
            'Label' => 'RealAudio 10 AAC (RAAC)',
        ],
        8199 => [
            'Id' => 8199,
            'Label' => 'RealAudio 10 AAC+ (RACP)',
        ],
        9472 => [
            'Id' => 9472,
            'Label' => 'Reserved range to 0x2600 Microsoft',
        ],
        13075 => [
            'Id' => 13075,
            'Label' => 'makeAVIS (ffvfw fake AVI sound from AviSynth scripts)',
        ],
        16707 => [
            'Id' => 16707,
            'Label' => 'Divio MPEG-4 AAC audio',
        ],
        16897 => [
            'Id' => 16897,
            'Label' => 'Nokia adaptive multirate',
        ],
        16963 => [
            'Id' => 16963,
            'Label' => 'Divio G726 Divio, Inc.',
        ],
        17228 => [
            'Id' => 17228,
            'Label' => 'LEAD Speech',
        ],
        22092 => [
            'Id' => 22092,
            'Label' => 'LEAD Vorbis',
        ],
        22358 => [
            'Id' => 22358,
            'Label' => 'WavPack Audio',
        ],
        26447 => [
            'Id' => 26447,
            'Label' => 'Ogg Vorbis (mode 1)',
        ],
        26448 => [
            'Id' => 26448,
            'Label' => 'Ogg Vorbis (mode 2)',
        ],
        26449 => [
            'Id' => 26449,
            'Label' => 'Ogg Vorbis (mode 3)',
        ],
        26479 => [
            'Id' => 26479,
            'Label' => 'Ogg Vorbis (mode 1+)',
        ],
        26480 => [
            'Id' => 26480,
            'Label' => 'Ogg Vorbis (mode 2+)',
        ],
        26481 => [
            'Id' => 26481,
            'Label' => 'Ogg Vorbis (mode 3+)',
        ],
        28672 => [
            'Id' => 28672,
            'Label' => '3COM NBX 3Com Corporation',
        ],
        28781 => [
            'Id' => 28781,
            'Label' => 'FAAD AAC',
        ],
        31265 => [
            'Id' => 31265,
            'Label' => 'GSM-AMR (CBR, no SID)',
        ],
        31266 => [
            'Id' => 31266,
            'Label' => 'GSM-AMR (VBR, including SID)',
        ],
        41216 => [
            'Id' => 41216,
            'Label' => 'Comverse Infosys Ltd. G723 1',
        ],
        41217 => [
            'Id' => 41217,
            'Label' => 'Comverse Infosys Ltd. AVQSBC',
        ],
        41218 => [
            'Id' => 41218,
            'Label' => 'Comverse Infosys Ltd. OLDSBC',
        ],
        41219 => [
            'Id' => 41219,
            'Label' => 'Symbol Technologies G729A',
        ],
        41220 => [
            'Id' => 41220,
            'Label' => 'VoiceAge AMR WB VoiceAge Corporation',
        ],
        41221 => [
            'Id' => 41221,
            'Label' => 'Ingenient Technologies Inc. G726',
        ],
        41222 => [
            'Id' => 41222,
            'Label' => 'ISO/MPEG-4 advanced audio Coding',
        ],
        41223 => [
            'Id' => 41223,
            'Label' => 'Encore Software Ltd G726',
        ],
        41225 => [
            'Id' => 41225,
            'Label' => 'Speex ACM Codec xiph.org',
        ],
        57260 => [
            'Id' => 57260,
            'Label' => 'DebugMode SonicFoundry Vegas FrameServer ACM Codec',
        ],
        59144 => [
            'Id' => 59144,
            'Label' => 'Unknown -',
        ],
        61868 => [
            'Id' => 61868,
            'Label' => 'Free Lossless Audio Codec FLAC',
        ],
        65534 => [
            'Id' => 65534,
            'Label' => 'Extensible',
        ],
        65535 => [
            'Id' => 65535,
            'Label' => 'Development',
        ],
    ];

}
