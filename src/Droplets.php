<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Contracts\Droplets\CreateMultipleContract;
use wappr\digitalocean\Contracts\Droplets\ListAllContract;
use wappr\digitalocean\Contracts\Droplets\ListAvailableKernelsContract;
use wappr\digitalocean\Contracts\Droplets\ListByTagContract;
use wappr\digitalocean\Contracts\ManagerContract;
use wappr\digitalocean\Contracts\Droplets\CreateContract;

/**
 * Class Droplets.
 */
class Droplets extends ManagerContract
{
    protected $endpoint = 'droplets';

    /**
     * @param CreateContract $createDroplet
     *
     * @return mixed
     */
    public function create(CreateContract $createDroplet)
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

    /**
     * @param ListByTagContract $listByTag
     *
     * @return mixed
     */
    public function listByTag(ListByTagContract $listByTag)
    {
        return $this->client->get($this->endpoint, $listByTag);
    }

    /**
     * @param ListAvailableKernelsContract $listAvailableKernels
     *
     * @return mixed
     */
    public function listAvailableKernels(ListAvailableKernelsContract $listAvailableKernels)
    {
        return $this->client->get(
            $this->endpoint.'/'.$listAvailableKernels->getDropletId().'/kernels',
            $listAvailableKernels
        );
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
