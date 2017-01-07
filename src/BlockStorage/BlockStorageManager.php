<?php

namespace wappr\DigitalOcean\BlockStorage;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\CreateBlockStorageContract;
use wappr\DigitalOcean\Contracts\Requests\ListContract;
use wappr\DigitalOcean\Contracts\Requests\ResourceContract;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\CreateSnapshotContract;
use wappr\DigitalOcean\Contracts\BlockStorage\DeleteByNameContract;
use wappr\DigitalOcean\Contracts\BlockStorage\DeleteBlockStorageContract;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveByNameContract;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveBlockStorageContract;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveSnapshotsContract;

/**
 * Class BlockStorageManager.
 */
class BlockStorageManager implements ListContract, ResourceContract, RetrieveContract
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
     * @param ClientInterface                 $client
     * @param CreateBlockStorageContract|null $blockStorage
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create(ClientInterface $client, CreateBlockStorageContract $blockStorage = null): ResponseInterface
    {
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Block Storage model required.');
        }

        return $client->post($this->action, $blockStorage);
    }

    /**
     * @param ClientInterface                 $client
     * @param DeleteBlockStorageContract|null $deleteBlockStorage
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function delete(ClientInterface $client, DeleteBlockStorageContract $deleteBlockStorage = null): ResponseInterface
    {
        if ($deleteBlockStorage == null) {
            throw new \InvalidArgumentException('Delete Block Storage model required.');
        }

        return $client->delete($this->action, $deleteBlockStorage, 'getVolumeId');
    }

    /**
     * Retrieve Block Storage volume information using the drive id (uuid).
     *
     * @param ClientInterface                   $client
     * @param RetrieveBlockStorageContract|null $blockStorage
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveBlockStorageContract $blockStorage = null): ResponseInterface
    {
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage model required.');
        }

        return $client->get($this->action.'/'.$blockStorage->getVolumeId());
    }

    /**
     * Retrieve Block Storage volume information using the name and region.
     *
     * @param ClientInterface        $client
     * @param RetrieveByNameContract $blockStorageByName
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieveByName(ClientInterface $client, RetrieveByNameContract $blockStorageByName): ResponseInterface
    {
        if ($blockStorageByName == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage By Name model required.');
        }

        return $client->get($this->action, $blockStorageByName->getQuery());
    }

    /**
     * List snapshots for a volume.
     *
     * @param ClientInterface                $client
     * @param RetrieveSnapshotsContract|null $blockStorageSnapshots
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function getSnapshots(ClientInterface $client, RetrieveSnapshotsContract $blockStorageSnapshots = null): ResponseInterface
    {
        if ($blockStorageSnapshots == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage SnapshotsManager model required.');
        }

        return $client->get($this->action.'/'.$blockStorageSnapshots->getVolumeId().'/snapshots');
    }

    /**
     * Create a snapshot from a volume.
     *
     * @param ClientInterface             $client
     * @param CreateSnapshotContract|null $blockStorageSnapshot
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function createSnapshot(ClientInterface $client, CreateSnapshotContract $blockStorageSnapshot = null): ResponseInterface
    {
        if ($blockStorageSnapshot == null) {
            throw new \InvalidArgumentException('Create Block Storage Snapshot model required.');
        }

        return $client->post($this->action.'/'.$blockStorageSnapshot->getVolumeId().'/snapshots', $blockStorageSnapshot);
    }

    /**
     * Delete a volume by name.
     *
     * @param ClientInterface           $client
     * @param DeleteByNameContract|null $blockStorageByName
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function deleteVolumeByName(ClientInterface $client, DeleteByNameContract $blockStorageByName = null): ResponseInterface
    {
        if ($blockStorageByName == null) {
            throw new \InvalidArgumentException('Delete Block Storage by name model required.');
        }

        return $client->delete($this->action, $blockStorageByName, 'return', $blockStorageByName->getQuery());
    }
}
