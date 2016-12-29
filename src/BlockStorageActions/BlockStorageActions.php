<?php

namespace wappr\DigitalOcean\BlockStorageActions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\AttachBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\AttachByNameBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveByNameBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\ResizeBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RetrieveAllBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RetrieveBlockStorageActionsInterface;

/**
 * Class BlockStorageActions.
 */
class BlockStorageActions implements RetrieveContract
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

        return $client->post(
            $this->action.'/'.$attachBlockStorageActions->getVolumeId().'/actions', $attachBlockStorageActions
        );
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

        return $client->post(
            $this->action.'/'.$removeBlockStorageActions->getVolumeId().'/actions', $removeBlockStorageActions
        );
    }

    /**
     * Remove a volume from a Droplet by name.
     *
     * @param ClientInterface                          $client
     * @param RemoveByNameBlockStorageActionsInterface $removeByNameBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function removeVolumeByName(ClientInterface $client, RemoveByNameBlockStorageActionsInterface $removeByNameBlockStorageActions): ResponseInterface
    {
        if ($removeByNameBlockStorageActions == null) {
            throw new \InvalidArgumentException('Remove Block Storage Actions model required.');
        }

        return $client->post($this->action.'/actions', $removeByNameBlockStorageActions);
    }

    /**
     * Resize a volume.
     *
     * @param ClientInterface                    $client
     * @param ResizeBlockStorageActionsInterface $resizeBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function resizeVolume(ClientInterface $client, ResizeBlockStorageActionsInterface $resizeBlockStorageActions): ResponseInterface
    {
        if ($resizeBlockStorageActions == null) {
            throw new \InvalidArgumentException('Resize Block Storage Actions model required.');
        }

        return $client->post(
            $this->action.'/'.$resizeBlockStorageActions->getVolumeId().'/actions', $resizeBlockStorageActions
        );
    }

    /**
     * List all actions for a volume.
     *
     * @param ClientInterface                         $client
     * @param RetrieveAllBlockStorageActionsInterface $retrieveAllBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function getAllActions(ClientInterface $client, RetrieveAllBlockStorageActionsInterface $retrieveAllBlockStorageActions): ResponseInterface
    {
        if ($retrieveAllBlockStorageActions == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage Actions model required.');
        }

        return $client->get(
            $this->action.'/'.$retrieveAllBlockStorageActions->getVolumeId().'/actions/'
        );
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
    public function retrieve(ClientInterface $client, RetrieveBlockStorageActionsInterface $blockStorageActions = null): ResponseInterface
    {
        if ($blockStorageActions == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage Actions model required.');
        }

        return $client->get(
            $this->action.'/'.$blockStorageActions->getVolumeId().'/actions/'.$blockStorageActions->getActionId()
        );
    }
}
