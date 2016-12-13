<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Models\Assign\AssignFloatingIPRequest;

/**
 * Class FloatingIPActions.
 */
class FloatingIPActions implements ListInterface, RetrieveInterface
{
    protected $action = 'floating_ips';

    public function getAll(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement getAll() method.
    }

    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }

    public function assign(ClientInterface $client, AssignFloatingIPRequest $assignFloatingIPRequest = null): ResponseInterface
    {
        if ($assignFloatingIPRequest == null) {
            throw new \InvalidArgumentException('Assign Floating IP Request model required.');
        }

        return $client->post($this->action.'/'.$assignFloatingIPRequest->getIp().'/actions', $assignFloatingIPRequest);
    }

    public function unassign(ClientInterface $client): ResponseInterface
    {
    }
}
