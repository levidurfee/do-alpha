<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Assign\AssignFloatingIPInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveFloatingIPActionInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveFloatingIPActionsInterface;
use wappr\DigitalOcean\Contracts\Models\UnAssign\UnAssignFloatingIPActionInterface;

/**
 * Class FloatingIPActions.
 */
class FloatingIPActions implements ListInterface, RetrieveInterface
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
