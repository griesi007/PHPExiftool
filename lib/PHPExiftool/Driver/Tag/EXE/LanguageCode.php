<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LanguageCode extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'LanguageCode';

    protected $FullName = 'mixed';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'Language Code';

    protected $Values = [
        0 => [
            'Id' => 0,
            'Label' => 'Neutral',
        ],
        400 => [
            'Id' => 400,
            'Label' => 'Process default',
        ],
        401 => [
            'Id' => 401,
            'Label' => 'Arabic',
        ],
        402 => [
            'Id' => 402,
            'Label' => 'Bulgarian',
        ],
        403 => [
            'Id' => 403,
            'Label' => 'Catalan',
        ],
        404 => [
            'Id' => 404,
            'Label' => 'Chinese (Traditional)',
        ],
        405 => [
            'Id' => 405,
            'Label' => 'Czech',
        ],
        406 => [
            'Id' => 406,
            'Label' => 'Danish',
        ],
        407 => [
            'Id' => 407,
            'Label' => 'German',
        ],
        408 => [
            'Id' => 408,
            'Label' => 'Greek',
        ],
        409 => [
            'Id' => 409,
            'Label' => 'English (U.S.)',
        ],
        410 => [
            'Id' => 410,
            'Label' => 'Italian',
        ],
        411 => [
            'Id' => 411,
            'Label' => 'Japanese',
        ],
        412 => [
            'Id' => 412,
            'Label' => 'Korean',
        ],
        413 => [
            'Id' => 413,
            'Label' => 'Dutch',
        ],
        414 => [
            'Id' => 414,
            'Label' => 'Norwegian (Bokml)',
        ],
        415 => [
            'Id' => 415,
            'Label' => 'Polish',
        ],
        416 => [
            'Id' => 416,
            'Label' => 'Portuguese (Brazilian)',
        ],
        417 => [
            'Id' => 417,
            'Label' => 'Rhaeto-Romanic',
        ],
        418 => [
            'Id' => 418,
            'Label' => 'Romanian',
        ],
        419 => [
            'Id' => 419,
            'Label' => 'Russian',
        ],
        420 => [
            'Id' => 420,
            'Label' => 'Urdu',
        ],
        421 => [
            'Id' => 421,
            'Label' => 'Indonesian',
        ],
        422 => [
            'Id' => 422,
            'Label' => 'Ukrainian',
        ],
        423 => [
            'Id' => 423,
            'Label' => 'Belarusian',
        ],
        424 => [
            'Id' => 424,
            'Label' => 'Slovenian',
        ],
        425 => [
            'Id' => 425,
            'Label' => 'Estonian',
        ],
        426 => [
            'Id' => 426,
            'Label' => 'Latvian',
        ],
        427 => [
            'Id' => 427,
            'Label' => 'Lithuanian',
        ],
        428 => [
            'Id' => 428,
            'Label' => 'Maori',
        ],
        429 => [
            'Id' => 429,
            'Label' => 'Farsi',
        ],
        430 => [
            'Id' => 430,
            'Label' => 'Sutu',
        ],
        431 => [
            'Id' => 431,
            'Label' => 'Tsonga',
        ],
        432 => [
            'Id' => 432,
            'Label' => 'Tswana',
        ],
        433 => [
            'Id' => 433,
            'Label' => 'Venda',
        ],
        434 => [
            'Id' => 434,
            'Label' => 'Xhosa',
        ],
        435 => [
            'Id' => 435,
            'Label' => 'Zulu',
        ],
        436 => [
            'Id' => 436,
            'Label' => 'Afrikaans',
        ],
        437 => [
            'Id' => 437,
            'Label' => 'Georgian',
        ],
        438 => [
            'Id' => 438,
            'Label' => 'Faeroese',
        ],
        439 => [
            'Id' => 439,
            'Label' => 'Hindi',
        ],
        440 => [
            'Id' => 440,
            'Label' => 'Kyrgyz',
        ],
        441 => [
            'Id' => 441,
            'Label' => 'Swahili',
        ],
        443 => [
            'Id' => 443,
            'Label' => 'Uzbek',
        ],
        444 => [
            'Id' => 444,
            'Label' => 'Tatar',
        ],
        445 => [
            'Id' => 445,
            'Label' => 'Bengali',
        ],
        446 => [
            'Id' => 446,
            'Label' => 'Punjabi',
        ],
        447 => [
            'Id' => 447,
            'Label' => 'Gujarati',
        ],
        448 => [
            'Id' => 448,
            'Label' => 'Oriya',
        ],
        449 => [
            'Id' => 449,
            'Label' => 'Tamil',
        ],
        450 => [
            'Id' => 450,
            'Label' => 'Mongolian',
        ],
        456 => [
            'Id' => 456,
            'Label' => 'Galician',
        ],
        457 => [
            'Id' => 457,
            'Label' => 'Konkani',
        ],
        458 => [
            'Id' => 458,
            'Label' => 'Manipuri',
        ],
        459 => [
            'Id' => 459,
            'Label' => 'Sindhi',
        ],
        460 => [
            'Id' => 460,
            'Label' => 'Kashmiri',
        ],
        461 => [
            'Id' => 461,
            'Label' => 'Nepali',
        ],
        465 => [
            'Id' => 465,
            'Label' => 'Divehi',
        ],
        490 => [
            'Id' => 490,
            'Label' => 'Walon',
        ],
        491 => [
            'Id' => 491,
            'Label' => 'Cornish',
        ],
        492 => [
            'Id' => 492,
            'Label' => 'Welsh',
        ],
        493 => [
            'Id' => 493,
            'Label' => 'Breton',
        ],
        800 => [
            'Id' => 800,
            'Label' => 'Neutral 2',
        ],
        804 => [
            'Id' => 804,
            'Label' => 'Chinese (Simplified)',
        ],
        807 => [
            'Id' => 807,
            'Label' => 'German (Swiss)',
        ],
        809 => [
            'Id' => 809,
            'Label' => 'English (British)',
        ],
        810 => [
            'Id' => 810,
            'Label' => 'Italian (Swiss)',
        ],
        813 => [
            'Id' => 813,
            'Label' => 'Dutch (Belgian)',
        ],
        814 => [
            'Id' => 814,
            'Label' => 'Norwegian (Nynorsk)',
        ],
        816 => [
            'Id' => 816,
            'Label' => 'Portuguese',
        ],
        1009 => [
            'Id' => 1009,
            'Label' => 'English (Canadian)',
        ],
        '007F' => [
            'Id' => '007F',
            'Label' => 'Invariant',
        ],
        '040A' => [
            'Id' => '040A',
            'Label' => 'Spanish (Castilian)',
        ],
        '040B' => [
            'Id' => '040B',
            'Label' => 'Finnish',
        ],
        '040C' => [
            'Id' => '040C',
            'Label' => 'French',
        ],
        '040D' => [
            'Id' => '040D',
            'Label' => 'Hebrew',
        ],
        '040E' => [
            'Id' => '040E',
            'Label' => 'Hungarian',
        ],
        '040F' => [
            'Id' => '040F',
            'Label' => 'Icelandic',
        ],
        '041A' => [
            'Id' => '041A',
            'Label' => 'Croato-Serbian (Latin)',
        ],
        '041B' => [
            'Id' => '041B',
            'Label' => 'Slovak',
        ],
        '041C' => [
            'Id' => '041C',
            'Label' => 'Albanian',
        ],
        '041D' => [
            'Id' => '041D',
            'Label' => 'Swedish',
        ],
        '041E' => [
            'Id' => '041E',
            'Label' => 'Thai',
        ],
        '041F' => [
            'Id' => '041F',
            'Label' => 'Turkish',
        ],
        '042a' => [
            'Id' => '042a',
            'Label' => 'Vietnamese',
        ],
        '042b' => [
            'Id' => '042b',
            'Label' => 'Armenian',
        ],
        '042c' => [
            'Id' => '042c',
            'Label' => 'Azeri',
        ],
        '042d' => [
            'Id' => '042d',
            'Label' => 'Basque',
        ],
        '042e' => [
            'Id' => '042e',
            'Label' => 'Sorbian',
        ],
        '042f' => [
            'Id' => '042f',
            'Label' => 'Macedonian',
        ],
        '043a' => [
            'Id' => '043a',
            'Label' => 'Maltese',
        ],
        '043b' => [
            'Id' => '043b',
            'Label' => 'Saami',
        ],
        '043c' => [
            'Id' => '043c',
            'Label' => 'Gaelic',
        ],
        '043e' => [
            'Id' => '043e',
            'Label' => 'Malay',
        ],
        '043f' => [
            'Id' => '043f',
            'Label' => 'Kazak',
        ],
        '044a' => [
            'Id' => '044a',
            'Label' => 'Telugu',
        ],
        '044b' => [
            'Id' => '044b',
            'Label' => 'Kannada',
        ],
        '044c' => [
            'Id' => '044c',
            'Label' => 'Malayalam',
        ],
        '044d' => [
            'Id' => '044d',
            'Label' => 'Assamese',
        ],
        '044e' => [
            'Id' => '044e',
            'Label' => 'Marathi',
        ],
        '044f' => [
            'Id' => '044f',
            'Label' => 'Sanskrit',
        ],
        '045a' => [
            'Id' => '045a',
            'Label' => 'Syriac',
        ],
        '047f' => [
            'Id' => '047f',
            'Label' => 'Invariant',
        ],
        '048f' => [
            'Id' => '048f',
            'Label' => 'Esperanto',
        ],
        '080A' => [
            'Id' => '080A',
            'Label' => 'Spanish (Mexican)',
        ],
        '080C' => [
            'Id' => '080C',
            'Label' => 'French (Belgian)',
        ],
        '081A' => [
            'Id' => '081A',
            'Label' => 'Serbo-Croatian (Cyrillic)',
        ],
        '0C07' => [
            'Id' => '0C07',
            'Label' => 'German (Austrian)',
        ],
        '0C09' => [
            'Id' => '0C09',
            'Label' => 'English (Australian)',
        ],
        '0C0A' => [
            'Id' => '0C0A',
            'Label' => 'Spanish (Modern)',
        ],
        '0C0C' => [
            'Id' => '0C0C',
            'Label' => 'French (Canadian)',
        ],
        '100C' => [
            'Id' => '100C',
            'Label' => 'French (Swiss)',
        ],
    ];

}
