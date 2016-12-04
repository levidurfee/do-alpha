<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageInterface;

/**
 * Class BlockStorage.
 */
class BlockStorage implements ListInterface, ResourceInterface, RetrieveInterface
{
    /**
     * @var string The action that you are requesting
     */
    protected $action = 'volumes';

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
     * @param ClientInterface                  $client
     * @param CreateBlockStorageInterface|null $blockStorage
     *
     * @return ResponseInterface
     */
    public function create(ClientInterface $client, CreateBlockStorageInterface $blockStorage = null): ResponseInterface
    {
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Block Storage model required.');
        }

        return $client->post($this->action, $blockStorage);
    }

    /**
     * @param ClientInterface                  $client
     * @param DeleteBlockStorageInterface|null $deleteBlockStorage
     *
     * @return ResponseInterface
     */
    public function delete(ClientInterface $client, DeleteBlockStorageInterface $deleteBlockStorage = null): ResponseInterface
    {
        if ($deleteBlockStorage == null) {
            throw new \InvalidArgumentException('Delete Block Storage model required.');
        }

        return $client->delete($this->action, $deleteBlockStorage, 'getDriveId');
    }

    /**
     * @param ClientInterface                    $client
     * @param RetrieveBlockStorageInterface|null $blockStorage
     *
     * @return ResponseInterface
     */
    public function retrieve(ClientInterface $client, RetrieveBlockStorageInterface $blockStorage = null): ResponseInterface
    {
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage model required.');
        }

        return $client->get($this->action.'/'.$blockStorage->getId());
    }
}
