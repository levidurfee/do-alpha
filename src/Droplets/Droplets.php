<?php

namespace wappr\DigitalOcean\Droplets;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateDroplet;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDropletInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDropletInterface;

/**
 * Class Droplets.
 */
class Droplets implements ListInterface, ResourceInterface, RetrieveInterface
{
    /**
     * @since 0.1.1
     *
     * @var string action
     */
    protected $action = 'droplets';

    /**
     * @since 0.1.1
     *
     * @param ClientInterface $client
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get($this->action);
    }

    /**
     * @since 0.1.1
     *
     * @param ClientInterface    $client
     * @param CreateDroplet|null $droplet
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create(ClientInterface $client, CreateDroplet $droplet = null): ResponseInterface
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Create Droplet model required.');
        }

        return $client->post($this->action, $droplet);
    }

    /**
     * @since 0.1.1
     *
     * @param ClientInterface             $client
     * @param DeleteDropletInterface|null $droplet
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function delete(ClientInterface $client, DeleteDropletInterface $droplet = null): ResponseInterface
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Delete Droplet model required.');
        }

        return $client->delete($this->action, $droplet, 'getDropletId');
    }

    /**
     * @since 0.1.1
     *
     * @param ClientInterface               $client
     * @param RetrieveDropletInterface|null $droplet
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveDropletInterface $droplet = null): ResponseInterface
    {
        if ($droplet == null) {
            throw new \InvalidArgumentException('Retrieve Droplet model required.');
        }

        return $client->get($this->action.'/'.$droplet->getDropletId());
    }
}
