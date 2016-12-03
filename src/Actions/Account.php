<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

/**
 * Class Account.
 */
class Account implements RetrieveInterface
{
    /**
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function retrieve(ClientInterface $client): ResponseInterface
    {
        return $client->get('account');
    }
}
