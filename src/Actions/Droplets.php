<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateDropletInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDropletInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDropletInterface;

/**
 * Class Droplets.
 */
class Droplets implements ListInterface, ResourceInterface, RetrieveInterface
{
    protected $action = 'droplets';

    /**
     * @param ClientInterface $client
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get($this->action);
    }

    /**
     * @param ClientInterface             $client
     * @param CreateDropletInterface|null $droplet
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function create(ClientInterface $client, CreateDropletInterface $droplet = null): ResponseInterface
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Create Droplet model required.');
        }

        return $client->post($this->action, $droplet);
    }

    /**
     * @param ClientInterface             $client
     * @param DeleteDropletInterface|null $droplet
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function delete(ClientInterface $client, DeleteDropletInterface $droplet = null): ResponseInterface
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Delete Droplet model required.');
        }

        return $client->delete($this->action, $droplet, 'getDropletId');
    }

    /**
     * @param ClientInterface               $client
     * @param RetrieveDropletInterface|null $droplet
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function retrieve(ClientInterface $client, RetrieveDropletInterface $droplet = null): ResponseInterface
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Retrieve Droplet model required.');
        }

        return $client->get($this->action.'/'.$droplet->getDropletId());
    }
}
