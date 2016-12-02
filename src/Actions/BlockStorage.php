<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Models\Create\CreateBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteBlockStorageInterface;

class BlockStorage implements ListInterface, ResourceInterface, RetrieveInterface
{
    public function getAll(ClientInterface $client)
    {
        // TODO: Implement getAll() method.
    }

    public function create(ClientInterface $client, CreateBlockStorageInterface $blockStorage = null)
    {
        // TODO: Implement create() method.
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Block Storage model required.');
        }
    }

    public function delete(ClientInterface $client, DeleteBlockStorageInterface $deleteBlockStorage = null)
    {
        if ($deleteBlockStorage == null) {
            throw new \InvalidArgumentException('Delete Block Storage model required.');
        }

        $client->delete('volumes', $deleteBlockStorage, 'getDriveId');
    }

    public function retrieve(ClientInterface $client)
    {
        // TODO: Implement retrieve() method.
    }
}
