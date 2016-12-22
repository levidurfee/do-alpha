<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveTagInterface.
 */
interface RetrieveTagInterface extends ModelInterface
{
    /**
     * RetrieveTagInterface constructor.
     *
     * @param string $tag_name
     */
    public function __construct(string $tag_name);

    /**
     * @return string
     */
    public function getTagName(): string;
}
