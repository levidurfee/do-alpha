<?php

namespace wappr\DigitalOcean\BlockStorageActions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\AttachBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\BlockStorageActions\AttachByNameBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveByNameBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\BlockStorageActions\ResizeBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RetrieveAllBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RetrieveBlockStorageActionsContract;

/**
 * Class BlockStorageActionsManager.
 */
class BlockStorageActionsManager implements RetrieveContract
{
    /**
     * @var string
     */
    protected $action = 'volumes';

    /**
     * Attach a volume to a Droplet.
     *
     * @param ClientInterface                         $client
     * @param AttachBlockStorageActionsContract|null $attachBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function attachVolume(ClientInterface $client, AttachBlockStorageActionsContract $attachBlockStorageActions = null): ResponseInterface
    {
        if ($attachBlockStorageActions == null) {
            throw new \InvalidArgumentException('Attach Block Storage ActionsManager model required.');
        }

        return $client->post(
            $this->action.'/'.$attachBlockStorageActions->getVolumeId().'/actions', $attachBlockStorageActions
        );
    }

    /**
     * Attach a volume to a Droplet by name.
     *
     * @param ClientInterface                          $client
     * @param AttachByNameBlockStorageActionsContract $attachByNameBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function attachVolumeByName(ClientInterface $client, AttachByNameBlockStorageActionsContract $attachByNameBlockStorageActions): ResponseInterface
    {
        if ($attachByNameBlockStorageActions == null) {
            throw new \InvalidArgumentException('Attach Block Storage by Name ActionsManager model required.');
        }

        return $client->post($this->action.'/actions', $attachByNameBlockStorageActions);
    }

    /**
     * Remove a volume from a Droplet.
     *
     * @param ClientInterface                    $client
     * @param RemoveBlockStorageActionsContract $removeBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function removeVolume(ClientInterface $client, RemoveBlockStorageActionsContract $removeBlockStorageActions): ResponseInterface
    {
        if ($removeBlockStorageActions == null) {
            throw new \InvalidArgumentException('Remove Block Storage ActionsManager model required.');
        }

        return $client->post(
            $this->action.'/'.$removeBlockStorageActions->getVolumeId().'/actions', $removeBlockStorageActions
        );
    }

    /**
     * Remove a volume from a Droplet by name.
     *
     * @param ClientInterface                          $client
     * @param RemoveByNameBlockStorageActionsContract $removeByNameBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function removeVolumeByName(ClientInterface $client, RemoveByNameBlockStorageActionsContract $removeByNameBlockStorageActions): ResponseInterface
    {
        if ($removeByNameBlockStorageActions == null) {
            throw new \InvalidArgumentException('Remove Block Storage ActionsManager model required.');
        }

        return $client->post($this->action.'/actions', $removeByNameBlockStorageActions);
    }

    /**
     * Resize a volume.
     *
     * @param ClientInterface                    $client
     * @param ResizeBlockStorageActionsContract $resizeBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function resizeVolume(ClientInterface $client, ResizeBlockStorageActionsContract $resizeBlockStorageActions): ResponseInterface
    {
        if ($resizeBlockStorageActions == null) {
            throw new \InvalidArgumentException('Resize Block Storage ActionsManager model required.');
        }

        return $client->post(
            $this->action.'/'.$resizeBlockStorageActions->getVolumeId().'/actions', $resizeBlockStorageActions
        );
    }

    /**
     * List all actions for a volume.
     *
     * @param ClientInterface                         $client
     * @param RetrieveAllBlockStorageActionsContract $retrieveAllBlockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function getAllActions(ClientInterface $client, RetrieveAllBlockStorageActionsContract $retrieveAllBlockStorageActions): ResponseInterface
    {
        if ($retrieveAllBlockStorageActions == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage ActionsManager model required.');
        }

        return $client->get(
            $this->action.'/'.$retrieveAllBlockStorageActions->getVolumeId().'/actions/'
        );
    }

    /**
     * Retrieve an existing volume action.
     *
     * @param ClientInterface                           $client
     * @param RetrieveBlockStorageActionsContract|null $blockStorageActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveBlockStorageActionsContract $blockStorageActions = null): ResponseInterface
    {
        if ($blockStorageActions == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage ActionsManager model required.');
        }

        return $client->get(
            $this->action.'/'.$blockStorageActions->getVolumeId().'/actions/'.$blockStorageActions->getActionId()
        );
    }
}
