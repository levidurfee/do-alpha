<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateBlockStorageSnapshotInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteBlockStorageByNameInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageByNameInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageSnapshotsInterface;

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
     *
     * @throws \InvalidArgumentException
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
     *
     * @throws \InvalidArgumentException
     */
    public function delete(ClientInterface $client, DeleteBlockStorageInterface $deleteBlockStorage = null): ResponseInterface
    {
        if ($deleteBlockStorage == null) {
            throw new \InvalidArgumentException('Delete Block Storage model required.');
        }

        return $client->delete($this->action, $deleteBlockStorage, 'getDriveId');
    }

    /**
     * Retrieve Block Storage volume information using the drive id (uuid).
     *
     * @param ClientInterface                    $client
     * @param RetrieveBlockStorageInterface|null $blockStorage
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveBlockStorageInterface $blockStorage = null): ResponseInterface
    {
        if ($blockStorage == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage model required.');
        }

        return $client->get($this->action.'/'.$blockStorage->getId());
    }

    /**
     * Retrieve Block Storage volume information using the name and region.
     *
     * @param ClientInterface                     $client
     * @param RetrieveBlockStorageByNameInterface $blockStorageByName
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieveByName(ClientInterface $client, RetrieveBlockStorageByNameInterface $blockStorageByName): ResponseInterface
    {
        if ($blockStorageByName == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage By Name model required.');
        }

        return $client->get($this->action, $blockStorageByName->getQuery());
    }

    /**
     * List snapshots for a volume.
     *
     * @param ClientInterface                             $client
     * @param RetrieveBlockStorageSnapshotsInterface|null $blockStorageSnapshots
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function getSnapshots(ClientInterface $client, RetrieveBlockStorageSnapshotsInterface $blockStorageSnapshots = null): ResponseInterface
    {
        if ($blockStorageSnapshots == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage Snapshots model required.');
        }

        return $client->get($this->action.'/'.$blockStorageSnapshots->getVolumeId().'/snapshots');
    }

    /**
     * Create a snapshot from a volume.
     *
     * @param ClientInterface                          $client
     * @param CreateBlockStorageSnapshotInterface|null $blockStorageSnapshot
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function createSnapshot(ClientInterface $client, CreateBlockStorageSnapshotInterface $blockStorageSnapshot = null): ResponseInterface
    {
        if ($blockStorageSnapshot == null) {
            throw new \InvalidArgumentException('Create Block Storage Snapshot model required.');
        }

        return $client->post($this->action.'/'.$blockStorageSnapshot->getVolumeId().'/snapshots', $blockStorageSnapshot);
    }

    /**
     * Delete a volume by name.
     *
     * @param ClientInterface                        $client
     * @param DeleteBlockStorageByNameInterface|null $blockStorageByName
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function deleteVolumeByName(ClientInterface $client, DeleteBlockStorageByNameInterface $blockStorageByName = null): ResponseInterface
    {
        if ($blockStorageByName == null) {
            throw new \InvalidArgumentException('Delete Block Storage by name model required.');
        }

        return $client->delete($this->action, $blockStorageByName, 'return', $blockStorageByName->getQuery());
    }
}
