<?php

namespace wappr\DigitalOcean\Contracts\Droplets;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteInterface.
 */
interface DeleteInterface extends ModelInterface
{
    /**
     * DeleteInterface constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id);

    /**
     * @return int
     */
    public function getDropletId(): int;
}
