<?php

namespace wappr\DigitalOcean\Droplets\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Droplets\RetrieveDropletInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveDropletRequest.
 */
class RetrieveDropletRequest extends RequestModel implements ModelInterface, RetrieveDropletInterface
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
