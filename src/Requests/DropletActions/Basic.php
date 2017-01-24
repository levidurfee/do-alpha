<?php

namespace wappr\digitalocean\Requests\DropletActions;

use wappr\digitalocean\Contracts\DropletActions\BasicContract;
use wappr\digitalocean\Contracts\RequestContract;

class Basic extends RequestContract implements BasicContract
{
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }
}
