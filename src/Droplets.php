<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Contracts\Droplets\CreateMultipleContract;
use wappr\digitalocean\Contracts\Droplets\ListAllContract;
use wappr\digitalocean\Contracts\Droplets\ListByTagContract;
use wappr\digitalocean\Contracts\ManagerContract;
use wappr\digitalocean\Contracts\Droplets\CreateDropletContract;

/**
 * Class Droplets.
 */
class Droplets extends ManagerContract
{
    protected $endpoint = 'droplets';

    /**
     * @param CreateDropletContract $createDroplet
     *
     * @return mixed
     */
    public function create(CreateDropletContract $createDroplet)
    {
        return $this->client->post($this->endpoint, $createDroplet);
    }

    /**
     * @param CreateMultipleContract $createMultiple
     *
     * @return mixed
     */
    public function createMultiple(CreateMultipleContract $createMultiple)
    {
        return $this->client->post($this->endpoint, $createMultiple);
    }

    /**
     * @param ListAllContract $listAllContract
     *
     * @return mixed
     */
    public function listAll(ListAllContract $listAllContract)
    {
        return $this->client->get($this->endpoint, $listAllContract);
    }

    public function listByTag(ListByTagContract $listByTag)
    {
        return $this->client->get($this->endpoint, $listByTag);
    }

    public function listAvailableKernels()
    {
    }

    public function listSnapshots()
    {
    }

    public function listBackups()
    {
    }

    public function listActions()
    {
    }

    public function delete()
    {
    }

    public function deleteByTag()
    {
    }

    public function listNeighbors()
    {
    }

    public function listAllNeightbors()
    {
    }
}
