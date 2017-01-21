<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListAvailableKernelsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListAvailableKernels.
 */
class ListAvailableKernels extends RequestContract implements ListAvailableKernelsContract
{
    /**
     * @var int
     */
    protected $droplet_id;

    /**
     * ListAvailableKernels constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }

    /**
     * @return int
     */
    public function getDropletId()
    {
        return $this->droplet_id;
    }
}
