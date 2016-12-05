<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageActionsInterface;

/**
 * Class BlockStorageActions.
 */
class BlockStorageActions implements ListInterface, RetrieveInterface
{
    /**
     * @var string
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
     * @param ClientInterface                           $client
     * @param RetrieveBlockStorageActionsInterface|null $blockStorageActions
     *
     * @return ResponseInterface
     */
    public function retrieve(
        ClientInterface $client,
        RetrieveBlockStorageActionsInterface $blockStorageActions = null
    ): ResponseInterface {
        if ($blockStorageActions == null) {
            throw new \InvalidArgumentException('Retrieve Block Storage Actions model required.');
        }

        return $client->get(
            $this->action.'/'.$blockStorageActions->getDriveId().'/'.$blockStorageActions->getActionId()
        );
    }
}
