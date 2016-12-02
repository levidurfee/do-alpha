<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Models\Create\CreateDropletInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDropletInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

class Droplets implements ListInterface, ResourceInterface, RetrieveInterface
{
    public function getAll(ClientInterface $client)
    {
        $client->get('droplets');
    }

    public function create(ClientInterface $client, CreateDropletInterface $droplet = null)
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Create Droplet model required.');
        }

        $client->post('droplets', $droplet);
    }

    public function delete(ClientInterface $client, DeleteDropletInterface $droplet = null)
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Delete Droplet model required.');
        }

        $client->delete('droplets', $droplet, 'getId');
    }

    public function retrieve(ClientInterface $client)
    {
        // TODO: Implement retrieve() method.
    }
}
