<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Contracts\ManagerContract;
use wappr\digitalocean\Contracts\BlockStorage\CreateBlockStorageContract;
use wappr\digitalocean\Contracts\BlockStorage\CreateSnapshotBlockStorageContract;
use wappr\digitalocean\Contracts\BlockStorage\DeleteBlockStorageContract;
use wappr\digitalocean\Contracts\BlockStorage\DeleteByNameBlockStorageContract;
use wappr\digitalocean\Contracts\BlockStorage\ListSnapshotsBlockStorageContract;
use wappr\digitalocean\Contracts\BlockStorage\RetrieveBlockStorageContract;
use wappr\digitalocean\Contracts\BlockStorage\RetrieveByNameBlockStorageContract;
use wappr\digitalocean\Requests\BlockStorage\ListAllBlockStorage;

/**
 * Class BlockStorage.
 */
class BlockStorage extends ManagerContract
{
    protected $endpoint = 'volumes';

    public function listAll()
    {
        return $this->client->get($this->endpoint, new ListAllBlockStorage);
    }

    /**
     * @param CreateBlockStorageContract $createBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function create(CreateBlockStorageContract $createBlockStorage)
    {
        return $this->client->post($this->endpoint, $createBlockStorage);
    }

    /**
     * @param RetrieveBlockStorageContract $retrieveBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve(RetrieveBlockStorageContract $retrieveBlockStorage)
    {
        return $this->client->get($this->endpoint.'/'.$retrieveBlockStorage->volume_id, $retrieveBlockStorage);
    }

    /**
     * @param RetrieveByNameBlockStorageContract $retrieveByNameBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveByName(RetrieveByNameBlockStorageContract $retrieveByNameBlockStorage)
    {
        return $this->client->get($this->endpoint, $retrieveByNameBlockStorage);
    }

    /**
     * @param ListSnapshotsBlockStorageContract $listSnapshotsBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listSnapshots(ListSnapshotsBlockStorageContract $listSnapshotsBlockStorage)
    {
        return $this->client->get($this->endpoint.'/'.$listSnapshotsBlockStorage->volume_id.'/snapshots', $listSnapshotsBlockStorage);
    }

    /**
     * @param CreateSnapshotBlockStorageContract $createSnapshotBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function createSnapshot(CreateSnapshotBlockStorageContract $createSnapshotBlockStorage)
    {
        return $this->client->post($this->endpoint.'/'.$createSnapshotBlockStorage->volume_id.'/snapshots', $createSnapshotBlockStorage);
    }

    /**
     * @param DeleteBlockStorageContract $deleteBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function delete(DeleteBlockStorageContract $deleteBlockStorage)
    {
        return $this->client->delete($this->endpoint.'/'.$deleteBlockStorage->volume_id, $deleteBlockStorage);
    }

    /**
     * @param DeleteByNameBlockStorageContract $deleteByNameBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteByName(DeleteByNameBlockStorageContract $deleteByNameBlockStorage)
    {
        return $this->client->delete($this->endpoint, $deleteByNameBlockStorage);
    }
}
