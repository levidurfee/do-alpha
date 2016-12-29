<?php

namespace wappr\DigitalOcean\Contracts\Droplets;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveInterface.
 */
interface RetrieveInterface extends ModelInterface
{
    /**
     * RetrieveInterface constructor.
     *
     * @param int $droplet_id
     */
    public function __construct(int $droplet_id);

    /**
     * @return int
     */
    public function getDropletId(): int;
}
