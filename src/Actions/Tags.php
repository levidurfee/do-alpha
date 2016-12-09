<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Actions\UpdateInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateTagInterface;

/**
 * Class Tags.
 */
class Tags implements ListInterface, ResourceInterface, RetrieveInterface, UpdateInterface
{
    /**
     * @var string
     */
    protected $action = 'tags';

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
     * @param ClientInterface         $client
     * @param CreateTagInterface|null $createTag
     *
     * @return ResponseInterface
     * @throws \InvalidArgumentException
     */
    public function create(ClientInterface $client, CreateTagInterface $createTag = null): ResponseInterface
    {
        if ($createTag == null) {
            throw new \InvalidArgumentException('Create Tag model required.');
        }

        return $client->post($this->action, $createTag);
    }

    public function delete(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement delete() method.
    }

    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }

    public function update(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement update() method.
    }
}
