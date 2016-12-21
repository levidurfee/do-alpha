<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDropletInterface;
use wappr\DigitalOcean\Models\ModelMethods;

/**
 * Class RetrieveDropletRequest.
 */
class RetrieveDropletRequest extends ModelMethods implements ModelInterface, RetrieveDropletInterface
{
    /**
     * @var int
     */
    protected $droplet_id;

    /**
     * RetrieveDropletRequest constructor.
     *
     * @param int $droplet_id
     */
    public function __construct(int $droplet_id)
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
