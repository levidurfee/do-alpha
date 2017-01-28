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

/**
 * Class BlockStorage.
 */
class BlockStorage extends ManagerContract
{
    protected $endpoint = 'volumes';

    public function listAll()
    {
    }

    /**
     * @param CreateBlockStorageContract $createBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function create(CreateBlockStorageContract $createBlockStorage)
    {
    }

    /**
     * @param RetrieveBlockStorageContract $retrieveBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve(RetrieveBlockStorageContract $retrieveBlockStorage)
    {
    }

    /**
     * @param RetrieveByNameBlockStorageContract $retrieveByNameBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveByName(RetrieveByNameBlockStorageContract $retrieveByNameBlockStorage)
    {
    }

    /**
     * @param ListSnapshotsBlockStorageContract $listSnapshotsBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listSnapshots(ListSnapshotsBlockStorageContract $listSnapshotsBlockStorage)
    {
    }

    /**
     * @param CreateSnapshotBlockStorageContract $createSnapshotBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function createSnapshot(CreateSnapshotBlockStorageContract $createSnapshotBlockStorage)
    {
    }

    /**
     * @param DeleteBlockStorageContract $deleteBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function delete(DeleteBlockStorageContract $deleteBlockStorage)
    {
    }

    /**
     * @param DeleteByNameBlockStorageContract $deleteByNameBlockStorage
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteByName(DeleteByNameBlockStorageContract $deleteByNameBlockStorage)
    {
    }
}
