<?php

namespace wappr\DigitalOcean\Droplets;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListContract;
use wappr\DigitalOcean\Contracts\Requests\ResourceContract;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\Droplets\CreateDropletInterface;
use wappr\DigitalOcean\Contracts\Droplets\DeleteDropletInterface;
use wappr\DigitalOcean\Contracts\Droplets\RetrieveDropletInterface;

/**
 * Class DropletsManager.
 */
class DropletsManager implements ListContract, ResourceContract, RetrieveContract
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
     * @param CreateDropletInterface|null $droplet
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create(ClientInterface $client, CreateDropletInterface $droplet = null): ResponseInterface
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
