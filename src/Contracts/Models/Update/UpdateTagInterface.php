<?php

namespace wappr\DigitalOcean\Contracts\Models\Update;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface UpdateTagInterface.
 */
interface UpdateTagInterface extends ModelInterface
{
    /**
     * UpdateTagInterface constructor.
     *
     * @param string $tag_name
     * @param string $name
     */
    public function __construct(string $tag_name, string $name);

    /**
     * @return string
     */
    public function getTagName(): string;
}
