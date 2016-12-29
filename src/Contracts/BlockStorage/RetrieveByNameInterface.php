<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveByNameInterface.
 */
interface RetrieveByNameInterface extends ModelInterface
{
    /**
     * RetrieveByNameInterface constructor.
     *
     * @param string $name
     * @param string $region
     */
    public function __construct(string $name, string $region);

    /**
     * @return array
     */
    public function getQuery(): array;
}
