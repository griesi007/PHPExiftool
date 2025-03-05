<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use PHPExiftool\Driver\Value\ValueInterface;
use PHPExiftool\Driver\Metadata\MetadataBag;

/**
 *
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class FileEntity implements \IteratorAggregate
{
    private array $cache = [];

    /**
     *
     * @var RDFParser
     */
    private $parser;

    /**
     * Construct a new FileEntity
     *
     * @param  string       $file
     * @param  \DOMDocument $dom
     * @param  RDFParser    $parser
     * @return FileEntity
     */
    public function __construct(private $file, private readonly \DOMDocument $dom, RDFParser $parser)
    {
        $this->parser = $parser->open($this->dom->saveXML());

        return $this;
    }

    public function getIterator(): \Traversable
    {
        return $this->getMetadatas()->getIterator();
    }

    /**
     *
     * @var string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     *
     * @return MetadataBag
     */
    public function getMetadatas()
    {
        $key = realpath($this->file);

        if (array_key_exists($key, $this->cache)) {
            return $this->cache[$key];
        }

        $metadatas = $this->parser->ParseMetadatas();

        $this->cache[$key] = $metadatas;

        return $metadatas;
    }

    /**
     * Execute a user defined query to retrieve metadata
     *
     * @param string $query
     *
     * @return ValueInterface
     */
    public function executeQuery($query)
    {
        return $this->parser->Query($query);
    }
}
