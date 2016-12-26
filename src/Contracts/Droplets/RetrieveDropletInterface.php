<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveDropletInterface.
 */
interface RetrieveDropletInterface extends ModelInterface
{
    /**
     * RetrieveDropletInterface constructor.
     *
     * @param int $droplet_id
     */
    public function __construct(int $droplet_id);

    /**
     * @return int
     */
    public function getDropletId(): int;
}
