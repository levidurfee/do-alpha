<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Models\Create\BlockStorageInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

class BlockStorage implements ListInterface, ResourceInterface, RetrieveInterface
{
    public function getAll(ClientInterface $client)
    {
        // TODO: Implement getAll() method.
    }

    public function create(ClientInterface $client, BlockStorageInterface $blockStorage = null)
    {
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Block Storage model required.');
        }
    }

    public function delete(ClientInterface $client)
    {
        // TODO: Implement delete() method.
    }

    public function retrieve(ClientInterface $client)
    {
        // TODO: Implement retrieve() method.
    }
}
