<?php

namespace wappr\digitalocean\Requests\DropletActions;

use wappr\digitalocean\Contracts\DropletActions\CreateSnapshotContract;
use wappr\digitalocean\Contracts\RequestContract;

class CreateSnapshot extends RequestContract implements CreateSnapshotContract
{
    public $type = 'snapshot';
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}
