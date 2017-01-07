<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Contracts\ManagerContract;
use wappr\digitalocean\Contracts\Droplets\CreateDropletContract;

class Droplets extends ManagerContract
{
    protected $endpoint = 'droplets';

    public function create(CreateDropletContract $createDropletContract)
    {
        return $this->client->post($this->endpoint, $createDropletContract);
    }

    public function createMultiple()
    {
    }

    public function listAll()
    {
    }

    public function listByTag()
    {
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
