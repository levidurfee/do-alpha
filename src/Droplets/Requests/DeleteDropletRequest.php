<?php

namespace wappr\DigitalOcean\Droplets\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Droplets\DeleteDropletInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class DeleteBlockStorageBlockStorageRequest.
 */
class DeleteDropletRequest extends RequestModel implements ModelInterface, DeleteDropletInterface
{
    /**
     * @var int Required
     */
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
