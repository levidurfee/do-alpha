<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteBlockStorageInterface;

class BlockStorage implements ListInterface, ResourceInterface, RetrieveInterface
{
    /**
     * @var string $action The action that you are requesting.
     */
    protected $action = 'volumes';

    /**
     * @param ClientInterface $client
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get($this->action);
    }

    public function create(ClientInterface $client, CreateBlockStorageInterface $blockStorage = null): ResponseInterface
    {
        // TODO: Implement create() method.
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Block Storage model required.');
        }
    }

    public function delete(ClientInterface $client, DeleteBlockStorageInterface $deleteBlockStorage = null): ResponseInterface
    {
        if ($deleteBlockStorage == null) {
            throw new \InvalidArgumentException('Delete Block Storage model required.');
        }

        $client->delete($this->action, $deleteBlockStorage, 'getDriveId');
    }

    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }
}
