<?php

namespace wappr\digitalocean\Requests\DropletActions;

use wappr\digitalocean\Contracts\RequestContract;
use wappr\digitalocean\Contracts\DropletActions\CreateSnapshotContract;

/**
 * Class CreateSnapshot.
 */
class CreateSnapshot extends RequestContract implements CreateSnapshotContract
{
    /**
     * @var string
     */
    public $type = 'snapshot';

    /**
     * @var string
     */
    public $name;

    /**
     * @param $name string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
