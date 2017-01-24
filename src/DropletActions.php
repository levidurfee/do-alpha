<?php

namespace wappr\digitalocean\Requests;

use wappr\digitalocean\Contracts\ManagerContract;
use wappr\digitalocean\Requests\DropletActions\Basic;

class DropletActions extends ManagerContract
{
    public $droplet_id;

    public function enableBackups($typeHelper, $droplet_id)
    {
        $request = new Basic($typeHelper);
        $this->client->post('/droplets/'.$droplet_id.'/actions', $request);
    }
}
