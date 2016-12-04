<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteDropletInterface.
 */
interface DeleteDropletInterface extends ModelInterface
{
    /**
     * DeleteDropletInterface constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id);

    /**
     * @return int
     */
    public function getDropletId(): int;
}
