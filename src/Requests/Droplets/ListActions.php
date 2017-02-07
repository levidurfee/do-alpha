<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListActionsContract;
use wappr\digitalocean\Contracts\RequestContract;

class ListActions extends RequestContract implements ListActionsContract
{
    use DropletId;
}
