<?php

namespace wappr\DigitalOcean\Droplets\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Droplets\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveBlockStorageRequest.
 */
class RetrieveDropletRequest extends RequestModel implements ModelInterface, RetrieveInterface
{
    /**
     * @var int
     */
    protected $droplet_id;

    /**
     * RetrieveBlockStorageRequest constructor.
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
