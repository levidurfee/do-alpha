<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListBackupsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListBackups.
 */
class ListBackups extends RequestContract implements ListBackupsContract
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * ListBackups constructor.
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
