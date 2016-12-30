<?php

namespace wappr\DigitalOcean\FloatingIPActions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListContract;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\FloatingIPActions\AssignFloatingIPInterface;
use wappr\DigitalOcean\Contracts\FloatingIPActions\RetrieveFloatingIPActionInterface;
use wappr\DigitalOcean\Contracts\FloatingIPActions\RetrieveFloatingIPActionsInterface;
use wappr\DigitalOcean\Contracts\FloatingIPActions\UnAssignFloatingIPActionInterface;

/**
 * Class FloatingIPActionsManager.
 */
class FloatingIPActionsManager implements ListContract, RetrieveContract
{
    /**
     * @var string
     */
    protected $action = 'floating_ips';

    /**
     * @param ClientInterface                         $client
     * @param RetrieveFloatingIPActionsInterface|null $retrieveFloatingIPActions
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function getAll(ClientInterface $client, RetrieveFloatingIPActionsInterface $retrieveFloatingIPActions = null): ResponseInterface
    {
        if ($retrieveFloatingIPActions == null) {
            throw new \InvalidArgumentException('Retrieve Floating IP Actions Request model required.');
        }

        return $client->get($this->action.'/'.$retrieveFloatingIPActions->getFloatingIp().'/actions');
    }

    /**
     * @param ClientInterface                        $client
     * @param RetrieveFloatingIPActionInterface|null $retrieveAction
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveFloatingIPActionInterface $retrieveAction = null): ResponseInterface
    {
        if ($retrieveAction == null) {
            throw new \InvalidArgumentException('Retrieve Floating IP Action Request model required.');
        }

        return $client->get($this->action.'/'.$retrieveAction->getFloatingIp().'/actions/'.$retrieveAction->getActionId());
    }

    /**
     * @param ClientInterface                $client
     * @param AssignFloatingIPInterface|null $assignFloatingIPRequest
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function assign(ClientInterface $client, AssignFloatingIPInterface $assignFloatingIPRequest = null): ResponseInterface
    {
        if ($assignFloatingIPRequest == null) {
            throw new \InvalidArgumentException('Assign Floating IP Request model required.');
        }

        return $client->post($this->action.'/'.$assignFloatingIPRequest->getIp().'/actions', $assignFloatingIPRequest);
    }

    /**
     * @param ClientInterface                        $client
     * @param UnAssignFloatingIPActionInterface|null $unAssignFloatingIPAction
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function unAssign(ClientInterface $client, UnAssignFloatingIPActionInterface $unAssignFloatingIPAction = null): ResponseInterface
    {
        if ($unAssignFloatingIPAction == null) {
            throw new \InvalidArgumentException('UnAssign Floating IP Request model required.');
        }

        return $client->post($this->action.'/'.$unAssignFloatingIPAction->getFloatingIp().'/actions', $unAssignFloatingIPAction);
    }
}
