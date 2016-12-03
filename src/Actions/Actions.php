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
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get('actions');
    }

    /**
     * @param ClientInterface              $client
     * @param RetrieveActionInterface|null $action
     *
     * @return ResponseInterface
     */
    public function retrieve(ClientInterface $client, RetrieveActionInterface $action = null): ResponseInterface
    {
        if ($action == null) {
            throw new \InvalidArgumentException('Retrieve Action model required.');
        }

        return $client->get('actions/'.$action->getActionId());
    }
}
