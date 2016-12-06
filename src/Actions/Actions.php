<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveActionInterface;

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
     * @param ClientInterface              $client
     * @param RetrieveActionInterface|null $action
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveActionInterface $action = null): ResponseInterface
    {
        if ($action == null) {
            throw new \InvalidArgumentException('Retrieve Action model required.');
        }

        return $client->get($this->action.'/'.$action->getActionId());
    }
}
