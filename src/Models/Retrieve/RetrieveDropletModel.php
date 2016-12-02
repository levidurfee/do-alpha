<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDropletInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class RetrieveDropletModel extends ModelMethods implements ModelInterface, RetrieveDropletInterface
{
    protected $droplet_id;

    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }

    /**
     * @return int
     */
    public function getDropletId(): int
    {
        return $this->droplet_id;
    }
}
