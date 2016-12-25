<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Attach\AttachBlockStorageActionsInterface;
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

    /* Attach a volume to a Droplet by name */

    /* Remove a volume from a Droplet */

    /* Remove a volume from a Droplet by name */

    /* Resize a volume */

    /* List all actions for a volume */

    /**
     * @since 0.1.1
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
