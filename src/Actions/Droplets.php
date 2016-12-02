<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Models\Create\CreateDropletInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDropletInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDropletInterface;

/**
 * Class Droplets.
 */
class Droplets implements ListInterface, ResourceInterface, RetrieveInterface
{
    /**
     * @param ClientInterface $client
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getAll(ClientInterface $client)
    {
        return $client->get('droplets');
    }

    /**
     * @param ClientInterface             $client
     * @param CreateDropletInterface|null $droplet
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function create(ClientInterface $client, CreateDropletInterface $droplet = null)
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Create Droplet model required.');
        }

        return $client->post('droplets', $droplet);
    }

    /**
     * @param ClientInterface             $client
     * @param DeleteDropletInterface|null $droplet
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function delete(ClientInterface $client, DeleteDropletInterface $droplet = null)
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Delete Droplet model required.');
        }

        return $client->delete('droplets', $droplet, 'getDropletId');
    }

    /**
     * @param ClientInterface               $client
     * @param RetrieveDropletInterface|null $droplet
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function retrieve(ClientInterface $client, RetrieveDropletInterface $droplet = null)
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Retrieve Droplet model required.');
        }

        return $client->get('droplets/'.$droplet->getDropletId());
    }
}
