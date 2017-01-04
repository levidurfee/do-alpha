<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteByNameContract.
 */
interface DeleteByNameContract extends ModelInterface
{
    /**
     * DeleteByNameContract constructor.
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
