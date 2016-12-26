<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveActionContract;
use wappr\DigitalOcean\Contracts\Requests\ListInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;

class Actions implements ListInterface, RetrieveInterface
{
    /**
     * @var string The action that you are requesting
     */
    protected $action = 'actions';

    /**
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get($this->action);
    }

    /**
     * @since 0.1.1
     *
     * @param ClientInterface             $client
     * @param RetrieveActionContract|null $action
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveActionContract $action = null): ResponseInterface
    {
        if ($action == null) {
            throw new \InvalidArgumentException('Retrieve Action model required.');
        }

        return $client->get($this->action.'/'.$action->getActionId());
    }
}
