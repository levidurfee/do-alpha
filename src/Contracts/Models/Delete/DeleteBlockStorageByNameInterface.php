<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteBlockStorageByNameInterface.
 */
interface DeleteBlockStorageByNameInterface extends ModelInterface
{
    /**
     * DeleteBlockStorageByNameInterface constructor.
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
