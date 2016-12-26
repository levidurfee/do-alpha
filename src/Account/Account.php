<?php

namespace wappr\DigitalOcean\Account;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

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
