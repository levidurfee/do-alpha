<?php

namespace wappr\digitalocean\Requests;

use wappr\digitalocean\Contracts\ManagerContract;
use wappr\digitalocean\Requests\DropletActions\Basic;
use wappr\digitalocean\Requests\DropletActions\CreateSnapshot;
use wappr\digitalocean\Requests\DropletActions\TypeHelper;

class DropletActions extends ManagerContract
{
    public $droplet_id;

    public function __construct($droplet_id)
    {
        parent::__construct();
        $this->droplet_id = $droplet_id;
    }

    public function enableBackups()
    {
        return $this->send(TypeHelper::ENABLE_BACKUPS);
    }

    public function disableBackups()
    {
        return $this->send(TypeHelper::DISABLE_BACKUPS);
    }

    public function reboot()
    {
        return $this->send(TypeHelper::REBOOT);
    }

    public function powerCycle()
    {
        return $this->send(TypeHelper::POWER_CYCLE);
    }

    public function shutdown()
    {
        return $this->send(TypeHelper::SHUTDOWN);
    }

    public function createSnapshot($name = '')
    {
        $request = new CreateSnapshot($name);

        return $this->client->post('/droplets/'.$this->droplet_id.'/actions', $request);
    }

    protected function send($action)
    {
        $request = new Basic($action);
        $this->client->post('/droplets/'.$this->droplet_id.'/actions', $request);

        return $this;
    }
}
