<?php

namespace wappr\digitalocean\Requests;

use wappr\digitalocean\Contracts\ManagerContract;
use wappr\digitalocean\Requests\DropletActions\Basic;
use wappr\digitalocean\Requests\DropletActions\CreateSnapshot;
use wappr\digitalocean\Requests\DropletActions\Retrieve;
use wappr\digitalocean\Requests\DropletActions\TypeHelper;

/**
 * Class DropletActions.
 *
 * You can use method chaining to send more than one command to the same droplet.
 */
class DropletActions extends ManagerContract
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * DropletActions constructor.
     *
     * @param int $droplet_id
     */
    public function __construct($droplet_id)
    {
        // Call parent constructor.
        parent::__construct();
        $this->droplet_id = $droplet_id;
    }

    /**
     * @return DropletActions
     */
    public function enableBackups()
    {
        return $this->send(TypeHelper::ENABLE_BACKUPS);
    }

    /**
     * @return DropletActions
     */
    public function disableBackups()
    {
        return $this->send(TypeHelper::DISABLE_BACKUPS);
    }

    /**
     * @return DropletActions
     */
    public function reboot()
    {
        return $this->send(TypeHelper::REBOOT);
    }

    /**
     * @return DropletActions
     */
    public function powerCycle()
    {
        return $this->send(TypeHelper::POWER_CYCLE);
    }

    /**
     * @return DropletActions
     */
    public function shutdown()
    {
        return $this->send(TypeHelper::SHUTDOWN);
    }

    /**
     * @param string $name
     *
     * @return DropletActions
     */
    public function createSnapshot($name = '')
    {
        $request = new CreateSnapshot($name);

        $this->client->post('/droplets/'.$this->droplet_id.'/actions', $request);

        return $this;
    }

    /**
     * @param $action_id
     *
     * @return mixed
     */
    public function retrieve($action_id)
    {
        return $this->client->get('/droplets/'.$this->droplet_id.'/'.$action_id, new Retrieve);
    }

    /**
     * @param $action
     *
     * @return $this
     */
    protected function send($action)
    {
        $request = new Basic($action);
        $this->client->post('/droplets/'.$this->droplet_id.'/actions', $request);

        return $this;
    }
}
