<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Attach\AttachBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Models\Attach\AttachByNameBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Models\Remove\RemoveBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Models\Remove\RemoveByNameBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageActionsInterface;

/**
 * Class BlockStorageActions.
 */
class BlockStorageActions implements RetrieveInterface
{
    /**
     * @var string
     */
    protected $action = 'volumes';

    /**
     * Attach a volume to a Droplet.
     *
     * @param ClientInterface                         $client
     * @param AttachBlockStorageActionsInterface|null $attachBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function attachVolume(ClientInterface $client, AttachBlockStorageActionsInterface $attachBlockStorageActions = null): ResponseInterface
    {
        if ($attachBlockStorageActions == null) {
            throw new \InvalidArgumentException('Attach Block Storage Actions model required.');
        }

        return $client->post($this->action.'/'.$attachBlockStorageActions->getVolumeId().'/actions', $attachBlockStorageActions);
    }

    /**
     * Attach a volume to a Droplet by name.
     *
     * @param ClientInterface                          $client
     * @param AttachByNameBlockStorageActionsInterface $attachByNameBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function attachVolumeByName(ClientInterface $client, AttachByNameBlockStorageActionsInterface $attachByNameBlockStorageActions): ResponseInterface
    {
        if ($attachByNameBlockStorageActions == null) {
            throw new \InvalidArgumentException('Attach Block Storage by Name Actions model required.');
        }

        return $client->post($this->action.'/actions', $attachByNameBlockStorageActions);
    }

    /**
     * Remove a volume from a Droplet.
     *
     * @param ClientInterface                    $client
     * @param RemoveBlockStorageActionsInterface $removeBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function removeVolume(ClientInterface $client, RemoveBlockStorageActionsInterface $removeBlockStorageActions): ResponseInterface
    {
        if ($removeBlockStorageActions == null) {
            throw new \InvalidArgumentException('Remove Block Storage Actions model required.');
        }

        return $client->post($this->action.'/'.$removeBlockStorageActions->getVolumeId().'/actions', $removeBlockStorageActions);
    }

    /**
     * Remove a volume from a Droplet by name.
     *
     * @param ClientInterface                          $client
     * @param RemoveByNameBlockStorageActionsInterface $removeByNameBlockStorageActions
     *
     * @return ResponseInterface
     * @throws \InvalidArgumentException
     */
    public function removeVolumeByName(ClientInterface $client, RemoveByNameBlockStorageActionsInterface $removeByNameBlockStorageActions): ResponseInterface
    {
        if ($removeByNameBlockStorageActions == null) {
            throw new \InvalidArgumentException('Remove Block Storage Actions model required.');
        }

        return $client->post($this->action.'/actions', $removeByNameBlockStorageActions);
    }

    /* Resize a volume */

    public function resizeVolume(ClientInterface $client): ResponseInterface
    {
        // TODO: write code.
    }

    /* List all actions for a volume */

    public function getAllActions(ClientInterface $client): ResponseInterface
    {
        // TODO: write code.
    }

    /**
     * Retrieve an existing volume action.
     *
     * @param ClientInterface                           $client
     * @param RetrieveBlockStorageActionsInterface|null $blockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(
        ClientInterface $client,
        RetrieveBlockStorageActionsInterface $blockStorageActions = null
    ): ResponseInterface {
        if ($blockStorageActions == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage Actions model required.');
        }

        return $client->get(
            $this->action.'/'.$blockStorageActions->getDriveId().'/actions/'.$blockStorageActions->getActionId()
        );
    }
}
