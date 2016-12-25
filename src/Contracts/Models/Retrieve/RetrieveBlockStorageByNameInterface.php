<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveBlockStorageByNameInterface
 * @package wappr\DigitalOcean\Contracts\Models\Retrieve
 */
interface RetrieveBlockStorageByNameInterface extends ModelInterface
{
    /**
     * RetrieveBlockStorageByNameInterface constructor.
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
