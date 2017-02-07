<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\DeleteDropletContract;
use wappr\digitalocean\Contracts\RequestContract;

class DeleteDroplet extends RequestContract implements DeleteDropletContract
{
    use DropletId;
}
