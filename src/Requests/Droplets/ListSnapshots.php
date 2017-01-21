<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListSnapshotsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListSnapshots.
 */
class ListSnapshots extends RequestContract implements ListSnapshotsContract
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * ListSnapshots constructor.
     *
     * @param $droplet_id int
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
